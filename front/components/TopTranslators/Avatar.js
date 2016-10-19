import React from 'react';

const Avatar = React.createClass({
  render() {
    const data = this.props.data;

    const number = data.number > 9
      ? data.number
      : `0${data.number}`;

    const username = data.username !== ''
      ? <span>(<a href="https://crowdin.com/profile/{data.username}">{data.username}</a>)</span>
      : <span>(<a href="https://crowdin.com/profile/{data.name}">{data.name}</a>)</span>;

    const avatar = data.avatar
      ? <img src={data.avatar} />
      : <img src="img/default-avatar.png" />;

    if (data.number <= 10) {
      return (
        <div className="contributor top-contributor">
          <div className="avatar">
            {avatar}
          </div>
          <div className="details">
            <div className="position">#{number}</div>
            <div className="name">{data.name}</div>
            <div className="info">{username}<img className="flag" src={`img/flags/${data.country}.png`} />{data.country}</div>
            <div className="links" />
          </div>
          <div className="dots">
            <div className="dot" />
            <div className="dot" />
            <div className="dot" />
          </div>
        </div>
      );
    }

    return (
      <div className={'col-md-2 contributor simple-contributor '+this.props.addClass}>
        <div className="avatar">
          {avatar}
        </div>
        <div className="details">
          <div className="fixed-height">
            <div className="name">{data.name}</div>
            <div className="username">{username}</div>
          </div>
          <div className="info">{data.country} - {data.textCount} words</div>
          <div className="position">#{data.number}</div>
        </div>
      </div>
    );
  }
})

export default Avatar;
