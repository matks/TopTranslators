import fs from 'fs';
import csv from 'fast-csv';
import moment from 'moment';

let translators = [];
const flags = {};
const languages = [];

const languageToFlag = {};

const date = moment().format('MMMM DD, YYYY');
console.log(`Current date: ${date}`);

const streamTranslators = fs.createReadStream('../data/translators.csv');
const streamUsers = fs.createReadStream('../data/users.csv');
const streamLanguages = fs.createReadStream('../data/languages.csv');
const streamFlags = fs.createReadStream('../data/flags.csv');

streamFlags.on('close', () => {
  streamTranslators.pipe(translatorsStream)
});

streamTranslators.on('close', () => {
  streamUsers.pipe(usersStream);
});

streamUsers.on('close', () => {
  streamLanguages.pipe(languagesStream);
});

streamLanguages.on('close', () => {
  fs.writeFileSync(
    '../public/statistics.json',
    JSON.stringify({ date, translators, languages, flags }, null, 2),
    'utf-8'
  );
});

const flagsStream = csv.parse().on('data', (data) => {
  if (data[0] === 'Flag' || data[1] === '') {
    return;
  }

  flags[data[0]] = data[2] !== ''
    ? data[2]
    : data[1];

  languageToFlag[data[0]] = data[1];
});

const languagesStream = csv.parse().on('data', (data) => {
  if (parseInt(data[1]) > 0) {
    const language = {
      country: '',
      percent: 0,
    };

    for (let key in languageToFlag) {
      if (languageToFlag[key] == data[0]) {
        language.country = key;
      }
    }

    language.percent = parseInt(data[1]);

    if (language.country != '') {
      languages.push(language);
    }
  }
});

const translatorsStream = csv.parse().on('data', (data) => {
  if (data[2] == parseInt(data[2])) {
    const user = {
      name: data[0],
      username: '',
      country: '',
      count: parseInt(data[2]),
      twitter: '',
      github: '',
      link: '',
      avatar: '',
    };

    let matches;
    if ((matches = /(.*)\s\((.*)\)/.exec(data[0])) !== null) {
      user.name = matches[1];
      user.username = matches[2];
    }

    for (let key in languageToFlag) {
      if (languageToFlag[key] == data[1]) {
        user.country = key;
      }
    }

    translators.push(user);
  }
});

const usersStream = csv.parse().on('data', (data) => {
  const userLinks = {
    name: data[0],
    username: '',
    avatar: data[1],
    website: data[2],
    github: data[3],
    twitter: data[4],
  };

  let matches;
  if ((matches = /(.*)\s\((.*)\)/.exec(data[0])) !== null) {
    userLinks.name = matches[1];
    userLinks.username = matches[2];
  }

  let newTranslators = [];

  translators.forEach((user) => {
    if (user.name == userLinks.name && user.username == userLinks.username) {
      user = Object.assign({}, user, userLinks);
    }

    newTranslators.push(user);
  });

  translators = newTranslators;
});

streamFlags.pipe(flagsStream);
