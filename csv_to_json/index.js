import fs from 'fs';
import csv from 'fast-csv';
import moment from 'moment';

const flags = [];
const translatorsLinks = [];
const translators = [];
const languages = [];

const date = moment().format('MMMM DD, YYYY');
console.log(`Current date: ${date}`);

const streamTranslators = fs.createReadStream('../data/translators.csv');
const streamTranslatorsLinks = fs.createReadStream('../data/users.csv');
const streamLanguages = fs.createReadStream('../data/languages.csv');
const streamFlags = fs.createReadStream('../data/flags.csv');

streamFlags.on('close', () => {
  console.log('Parsing users.csv ...');
  streamTranslatorsLinks.pipe(translatorsLinksStream)
});

streamTranslatorsLinks.on('close', () => {
  console.log('Parsing translators.csv ...');
  streamTranslators.pipe(translatorsStream);
});

streamTranslators.on('close', () => {
  console.log('Parsing languages.csv ...');
  streamLanguages.pipe(languagesStream);
});

streamLanguages.on('close', () => {
  console.log('Writing ...');
  fs.writeFileSync(
    '../front/data/statistics.json',
    JSON.stringify({ date, translators, languages }, null, 2),
    'utf-8'
  );
  console.log('DONE!');
});

const flagsStream = csv.parse().on('data', (data) => {
  if (data[1] === 'Flag' || data[1] === '') {
    return;
  }

  let displayName = data[2] !== ''
    ? data[2]
    : data[1];

  if (displayName !== '') {
    flags.push({
      name: data[1],
      displayName,
      code: data[0],
    });
  }
});

const languagesStream = csv.parse().on('data', (data) => {
  if (parseInt(data[1]) > 0) {
    const language = {
      country: data[0],
      flag: '',
      percent: 0,
    };

    let flag = getFlag(data[0]);
    if (typeof flag === 'undefined') {
      console.log(`Cannot found flag ${data[0]}`);
      return;
    }

    language.percent = parseInt(data[1]);
    language.country = flag.displayName;
    language.flag = flag.code;

    if (language.country != '') {
      languages.push(language);
    }
  }
});

const translatorsLinksStream = csv.parse().on('data', (data) => {
  translatorsLinks.push({
    name: data[0],
    avatar: data[1],
    website: data[2],
    github: data[3],
    twitter: data[4],
  });
});

const translatorsStream = csv.parse().on('data', (data) => {
  if (data[2] == parseInt(data[2])) {
    const user = {
      name: data[0],
      username: '',
      country: '',
      flag: '',
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

    translatorsLinks.forEach((translator) => {
      if (translator.name === data[0]) {
        user.avatar = translator.avatar;
        user.website = translator.website;
        user.github = translator.github;
        user.twitter = translator.twitter;
      }
    });

    let flag = getFlag(data[1]);
    if (typeof flag === 'undefined') {
      console.log(`Cannot found flag ${data[1]}`);
      return;
    }

    user.country = flag.displayName;
    user.flag = flag.code;

    translators.push(user);
  }
});

const getFlag = function(name) {
  let flagFounded = undefined;
  flags.forEach((flag) => {
    if (flag.name === name) {
      flagFounded = flag;
    }
  });
  return flagFounded;
};

console.log('Parsing flags.csv ...');
streamFlags.pipe(flagsStream);
