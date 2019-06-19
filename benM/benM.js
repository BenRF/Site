'use strict';

const e = React.createElement;

class BenM extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
        requested: false,
        name: 0
    };
  }
  render() {
      if (!this.state.requested) {
          return e(RequestForm);
      } else {
          return "Hello " + this.state.name;
      }
  }
}

class RequestForm extends React.Component {
  constructor(props) {
    super(props);
  }
  render() {
      return e(React.Fragment,null,(e('p',null,'Hey'),e('p',null,'Hi')));
  }
}

const domContainer = document.querySelector('#benMApp');
ReactDOM.render(e(BenM), domContainer);
