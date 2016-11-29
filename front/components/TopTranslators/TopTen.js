import React, { PropTypes } from 'react';
import { connect } from 'react-redux';
import Avatar from './Avatar';
import Arrow from './Arrow';

const TopTenComponent = React.createClass({
  render() {
    const translatorsList = this.props.translators;

    const date = this.props.date;

    const leftColumn = [];
    const rightColumn = [];
    let allCounts = [];
    if (translatorsList.length >= 10) {
      for (let i = 0; i < 10; i++) {
        const key = `user_${i}`
        const topAvatar = <Avatar
          key={key}
          data={translatorsList[i]}
        />;
        if (i % 2) {
          rightColumn.push(topAvatar);
        } else {
          leftColumn.push(topAvatar);
        }
        allCounts.push(translatorsList[i].textCount);
      }
    }

    return (
      <div>
        <div className="col-md-10">
          <h2 className="text-md-center">Top translators:</h2>
          <div className="text-md-center date">Last update: <strong>{date}</strong></div>
        </div>
        <div className="col-md-4">
          {leftColumn}
        </div>
        <div className="col-md-2">
          <Arrow counts={allCounts} />
        </div>
        <div className="col-md-4 right-column">
          {rightColumn}
        </div>
      </div>
    );
  }
});

TopTenComponent.propTypes = {
  translators: PropTypes.array.isRequired,
  date: PropTypes.string.isRequired,
}

const mapStateToProps = (state) => {
  return {
    translators: state.data.translators,
    date: state.data.date,
  }
}

const TopTen = connect(
  mapStateToProps
)(TopTenComponent);

export default TopTen;
