import React, { Component } from "react";
import Home from "./Components/Home";
import Header from "./Components/Header";
import ErrorPage from "./Components/ErrorPage";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";

export class App extends Component {
  render() {
    return (
      // <Home />
      <Router>
        <Routes>
          <Route
            exact
            path="/"
            element={
              <>
                <Header />
                <Home />
              </>
            }
          />
          <Route path="/blog" element={<h1>وبلاگ</h1>} />
          <Route
            path="*"
            element={
              <>
                <Header />
                <ErrorPage />
              </>
            }
          ></Route>
        </Routes>
      </Router>
    );
  }
}
export default App;
