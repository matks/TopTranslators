import React from 'react';
import FlagBig from './FlagBig';

const TenBig = React.createClass({
  render() {
    const languagesList = this.props.languages;
    const flags = this.props.flags;

    const listToDisplay = [];
    languagesList.forEach((value, index) => {
      listToDisplay.push(
        <FlagBig
          key={index}
          flags={flags}
          data={value}
        />
      );
    });

    return (
      <div>
        {listToDisplay}
      </div>
    );
  }
});

export default TenBig;
