import React, { PropTypes } from 'react';
import { connect } from 'react-redux';
import Avatar from './Avatar';
import Arrow from './Arrow';

const TopTenComponent = React.createClass({
  render() {
    const translatorsList = this.props.translators;

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
}

const mapStateToProps = (state) => {
  return {
    translators: state.data.translators,
  }
}

const TopTen = connect(
  mapStateToProps
)(TopTenComponent);

export default TopTen;
