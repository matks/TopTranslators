import React, { PropTypes } from 'react';
import { connect } from 'react-redux';
import Avatar from './Avatar';
import TranslatorsStep from './TranslatorsStep'
import configuration from '../../settings';
import SeeMore from '../SeeMore';

const AllTranslatorsComponent = React.createClass({
  render() {
    const translators = this.props.translators.slice(10, this.props.translators .length);

    const translatorsSteps = [];
    configuration.translatorsSteps.forEach((step, idStep) => {
      const stepTranslators = [];
      translators.forEach((translator, idTranslator) => {
        if (translator.count > step.from && !translator.showed) {
          translator.showed = true;
          translator.id = idTranslator;
          stepTranslators.push(translator);
        }
      });
      if (stepTranslators.length > 0) {
        translatorsSteps.push(
          <TranslatorsStep
            key={idStep}
            step={step}
            translators={stepTranslators}
          />
        );
      }
    });

    return (
      <div  id="all-translators">
        <div className="container">
          <div className="row">
            {translatorsSteps}
          </div>
        </div>
      </div>
    );
  }
});

AllTranslatorsComponent.propTypes = {
  translators: PropTypes.array.isRequired,
}

const mapStateToProps = (state) => {
  return {
    translators: state.data.translators,
  }
}

const AllTranslators = connect(
  mapStateToProps
)(AllTranslatorsComponent);

export default AllTranslators;
