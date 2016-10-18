import React from 'react';

const SeeMore = React.createClass({
  onTopClick() {
    const element = $(this.refs.buttonTop);
    const bottomButton = $(this.refs.buttonBottom);
    element.toggleClass('open');
    if (element.hasClass('open')) {
      element.next().slideDown('slow');
      bottomButton.toggleClass('open', true);
    } else {
      element.next().slideUp('slow');
      bottomButton.toggleClass('open', false);
    }
  },
  onBottomClick() {
    const element = $(this.refs.buttonTop);
    const topButton = $(this.refs.buttonTop);
    element.toggleClass('open');
    if (element.hasClass('open')) {
      element.next().slideDown('slow');
      topButton.toggleClass('open', true);
    } else {
      element.next().slideUp('slow');
      topButton.toggleClass('open', false);
    }
  },
  render() {
    return (
      <div>
        <div
          ref="buttonTop"
          className="col-md-8 push-md-1 see-more text-md-center"
          onClick={this.onTopClick}
        >
          <span className="more">See more</span>
          <span className="less">See less</span>
        </div>
        <div className="col-md-10 collapse">
          <div className="row">
            {this.props.children}
            <div
              ref="buttonBottom"
              className="col-md-8 push-md-1 see-more text-md-center"
              onClick={this.onBottomClick}
            >
              <span className="more">See more</span>
              <span className="less">See less</span>
            </div>
          </div>
        </div>
      </div>
    );
  }
});

export default SeeMore;
