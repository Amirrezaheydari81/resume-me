import React, { Component } from 'react'
import Header from './Components/Header';
import HomePage from './Components/HomePage';

class App extends Component {
  state = {}
  render() {
    return (
      <>
        <Header />
        <HomePage />
      </>
    )
  }
}

export default App;