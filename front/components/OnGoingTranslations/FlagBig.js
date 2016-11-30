import React from 'react';
import settings from '../../settings';

const FlagBig = React.createClass({
  render() {
    const data = this.props.data;
    const flags = this.props.flags;

    const number = data.number > 9
      ? data.number
      : `0${data.number}`;

    return (
      <div className="col-md-5 translation-progress">
        <div className="position">#{number}</div>
        <div className="flag-line">
          <img src={ `img/flags/${data.country}.png` } className="flag" />
          <span className="name">{ flags[data.country] }</span>
          <span className="percent">{data.percent}%</span>
        </div>
        <div className="progress">
          <div className="value" style={{ width: `${data.percent}%` }}></div>
        </div>
      </div>
    );
  }
})

export default FlagBig;
