FROM alpine AS builder1

ARG CROWDIN_TOKEN

RUN apk add --update --no-cache curl jq

WORKDIR /app/

RUN curl "https://api.crowdin.com/api/project/prestashop-official/status?key=$CROWDIN_TOKEN&json" | jq -r '.[] | [.name, .approved_progress]| @csv' > /app/translations.csv

RUN curl "https://api.crowdin.com/api/project/prestashop-official/reports/top-members/export?key=$CROWDIN_TOKEN&json&date_from=2016-01-01&format=csv" |jq -r .hash > /app/hash && \
    curl "https://api.crowdin.com/api/project/prestashop-official/reports/top-members/download?key=$CROWDIN_TOKEN&hash=$(cat /app/hash)" >> /app/translators.csv

FROM node:8 AS builder2

COPY . /app/
WORKDIR /app/

COPY --from=builder1 /app/translations.csv /app/data/languages.csv
COPY --from=builder1 /app/translators.csv /app/data/translators.csv

RUN apt-get update && \
    apt-get install -y zip

WORKDIR /app/csv_to_json/

RUN npm install && \
    npm start

WORKDIR /app/front/

RUN npm install && \
    npm run build

FROM httpd:2.4.41-alpine

COPY --from=builder2 /app/public/ /usr/local/apache2/htdocs/
