import React from 'react';
import StepTitle from './StepTitle';
import Avatar from './Avatar';

const TranslatorsStep = React.createClass({
  render() {
    const translators = [];
    this.props.translators.forEach((translator, index) => {
      const addClass = index % 4
        ? ''
        : 'offset-md-1';

      translators.push(
        <Avatar
          key={index}
          data={translator}
          addClass={addClass}
        />
      );
    });

    return (
      <div className={'step '+this.props.step.class}>
        <StepTitle step={this.props.step} />
        {translators}
      </div>
    );
  }
})

export default TranslatorsStep;
