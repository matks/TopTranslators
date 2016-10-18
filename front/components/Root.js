import React, { PropTypes } from 'react';
import { connect } from 'react-redux';
import TopTranslators from './TopTranslators';
import OnGoingTranslations from './OnGoingTranslations';
import { fetchData } from '../actions/data'

const RootComponent = React.createClass({
  componentDidMount() {
    this.props.fetchData();
  },
  render() {
    return (
      <div>
        <TopTranslators />
        <div className="row">
          <div className="col-md-10 text-md-center transition">
            <p className="white-title">Join our community of contributors</p>
            <a href="https://crowdin.com/project/prestashop-official" className="btn btn-primary">Translate now</a>
          </div>
        </div>
        <OnGoingTranslations />
      </div>
    )
  }
});

RootComponent.propTypes = {
  fetchData: PropTypes.func.isRequired,
}

const mapDispatchToProps = (dispatch) => {
  return {
    fetchData: () => {
      dispatch(fetchData())
    }
  }
}

const Root = connect(
  null,
  mapDispatchToProps
)(RootComponent);

export default Root;
