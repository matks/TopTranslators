import React, { PropTypes } from 'react';
import { connect } from 'react-redux';
import TenBig from './TenBig';
import SeeMore from '../SeeMore';
import OtherFlags from './OtherFlags';
import FullFlags from './FullFlags';

const OnGoingTranslationsComponent = React.createClass({
  render() {
    const top1to10 = [];
    const top11to20 = [];
    const others = [];
    const finished = [];

    this.props.languages.forEach((language) => {
      if (language.percent === 100) {
        finished.push(language);
      } else {
        if (top1to10.length < 10) {
          top1to10.push(language);
        } else if (top11to20.length < 10) {
          top11to20.push(language);
        } else {
          others.push(language);
        }
      }
    });

    return (
      <div className="row main-content">
        <div className="col-md-10">
          <h2 className="text-md-center">Ongoing translations:</h2>
        </div>
        <div className="col-md-8 push-md-1">
          <div className="row">
            <TenBig languages={top1to10} />
          </div>
        </div>
        <SeeMore>
          <div className="row">
            <div className="col-md-8 push-md-1">
              <TenBig languages={top11to20} />
            </div>
          </div>
          <OtherFlags data={others} />
        </SeeMore>
        <div className="col-md-10">
          <h2 className="text-md-center small-margin">Fully translated languages:</h2>
        </div>
        <FullFlags data={finished} />
      </div>
    )
  }
})

OnGoingTranslationsComponent.propTypes = {
  languages: PropTypes.array.isRequired,
}

const mapStateToProps = (state) => {
  return {
    languages: state.data.languages,
  }
}

const OnGoingTranslations = connect(
  mapStateToProps
)(OnGoingTranslationsComponent);

export default OnGoingTranslations;
