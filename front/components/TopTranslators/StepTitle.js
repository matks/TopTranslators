import React from 'react';

const StepTitle = React.createClass({
  render() {
    const classes = "col-md-10 title "+this.props.step.class;

    return (
      <div className={classes}>{this.props.step.title}</div>
    )
  }
})

export default StepTitle;
