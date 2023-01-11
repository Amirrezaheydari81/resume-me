import React, { Component } from 'react'
import HomePage from './Components/HomePage';
// import { BrowserRouter  as Router,Route } from 'react-router-dom';

export default class App extends Component  {
  render() {
    return (
      <>
      <HomePage />
      </>
      // <Router>
      //   <Route exact path='/' Component={HomePage} />
      //   <Route path='/blog' render={()=><h1>Blog</h1>} />
      // </Router>
    )
  }
}

// export default App;