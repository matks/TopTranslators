import { REQUEST_DATA, RECEIVE_DATA } from '../actions/data';

const compareCount = (a, b) => {
  if (a.count > b.count) {
    return -1;
  }
  if (a.count < b.count) {
    return 1;
  }
  return 0;
}

const comparePercent = (a, b) => {
  if (a.percent > b.percent) {
    return -1;
  }
  if (a.percent < b.percent) {
    return 1;
  }
  return 0;
}

const data = (state = { date: '', translators: [], languages: [] }, action) => {
  switch (action.type) {
    case RECEIVE_DATA:

      action.json.translators.sort(compareCount);
      action.json.translators.forEach((value, index) => {
        value.number = index + 1;
        value.textCount = value.count.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
      });

      action.json.languages.sort(comparePercent);
      let position = 1;
      action.json.languages.forEach((value, index) => {
        if (value.percent !== 100) {
          value.number = position++;
        }
      });

      return Object.assign({}, state, action.json);
      break;
  }

  return state;
}

export default data;
