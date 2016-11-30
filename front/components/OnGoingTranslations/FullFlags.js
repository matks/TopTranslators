import React from 'react';
import settings from '../../settings';

const FullFlags = React.createClass({
  render() {
    const data = this.props.data;
    const flags = this.props.flags;

    const flagsToDisplay = [];
    data.forEach((language, index) => {
      const addClass = index % 4
        ? ''
        : 'offset-md-1';

      flagsToDisplay.push(
        <div key={index} className={ `text-md-center col-md-2 full-flag ${addClass}` }>
          <img src={ `img/flags/${language.country}.png` } className="flag" />
          <div className="name">{ flags[language.country] }</div>
          <div className="progress">
            <div className="value" />
          </div>
          <div className="percent">{language.percent}%</div>
        </div>
      )
    });

    return (
      <div className="row">
        {flagsToDisplay}
      </div>
    );
  }
})

export default FullFlags;
