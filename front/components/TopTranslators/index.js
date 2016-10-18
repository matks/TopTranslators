import React from 'react';
import TopTen from './TopTen';
import AllTranslators from './AllTranslators';
import SeeMore from '../SeeMore';

const TopTranslators = React.createClass({
  render() {
    return (
      <div className="row main-content">
        <TopTen />
        <SeeMore>
          <AllTranslators />
        </SeeMore>
      </div>
    );
  }
});

export default TopTranslators;
