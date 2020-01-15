# Top Translators

> Top translators tribute page

## Project overview

This project is divided into 5 sections:

### Config

Folder only containing the settings.json file for the basic configuration of the tool.

Currently, the configuration only allow to change the title for the different levels of contribution
and the number of contributions needed to.

### Csv to json

A little script generating the data file from the CSV exports.

To use this tool:
 - Install the needed dependencies with `npm install`
 - This script need three files *on the data folder*:
   - flags.csv
   - languages.csv
   - translators.csv
 - Run the scrip `npm start` to generate the statistics.json file.

### Data

The folder containing the data of the application (csv files and the generated json).

The needed csv files for the generator on the csv_to_json folder are:

#### flags.csv

```
Flag,Crowdin,Affichage
EU,Basque,
BRE,Breton,
CAT,Catalan,
QC,"French, Quebec","French, QC"
```
First row ignored.
Three columns readed:
 - The flag code (used by the front website),
 - The crowdin language name,
 - The display language name, if no display name is set, the crowdin name will be used.

#### languages.csv

```
Croatian,100,DONE,,
Dutch,100,DONE,,
Russian,100,DONE,,
Swedish,100,DONE,,
```

A row is ignored if the second column is not an integer or if the value is less than 1%.
Two columns readed:
 - The crowdin language name,
 - The completion percent.

#### translators.csv

```
user,language,TOTAL words,Rank,Category,Profile pic,Crowdin link,Website link,GitHub link,Twitter link
A Petapouca (petapouca),Galician,25293,1,1,https://www.gravatar.com/avatar/3fe146dc77a5b5f9a8c17394210baf09?s=150,https://crowdin.com/profile/petapouca,,,
Alper Demir (alper-demir),Turkish,24834,6,1,https://www.gravatar.com/avatar/155283423312fb422acc72b8ef875c38?s=150,https://crowdin.com/profile/alper-demir,,,
```

A row is ignored if the third column is not an integer.
Three columns readed:
 - The user real name and username (in brackets),
 - The crowdin language name of the user,
 - The translated words count of the user.

### Front

The front website.

To install and compile the website, just run `npm install`. To just compile the website, run
`npm run build` and to watch your modifications, run `npm run watch`.

### Server

A basic node.js server for the application.

To start the server, install the dependencies with `npm install` then start the server with
`npm start`.

## Project build

In order to build the project, and as described earlier, you need to:

* First, build the csv to json part: 

```
cd csv_to_json
npm install && npm start

```

* Then, you need to build the assets:

```
cd front
npm install && npm run build
```

If you just want to develop locally the application, it is possible to run, instead of `npm run build`: 

```
npm run watch
```

### Requirements

We've tested the build with node 8, maybe later versions are also suitable.
You need to have zip installed for the node package manager to work.

### Docker

In order to facilitate the application's build (and it's deployment), we've worked a Dockerfile.

It realies heavily on the [docker multi-stage](https://docs.docker.com/develop/develop-images/multistage-build/) feature, in order to provide a clean image for the run.

So, to *build* the image: 

``` 
docker build --no-cache --build-arg CROWDIN_TOKEN={{CROWDINAPIKEY}} -t top-translators -f Dockerfile .
```

Where *{{CROWDINAPIKEY}}* is your crowdin key or token, used to retrieve some translators and languages data.

Then, to *run* it and access it locally:

```
docker run -p 80:80 top-translators
```
