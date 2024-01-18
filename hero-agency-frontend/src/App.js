import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import Navbar from './components/Layout/Navbar';
import Login from './components/Auth/Login';
import Register from './components/Auth/Register';
import SuperheroesList from './components/SuperHeroes/SuperheroesList';
import SuperheroDetails from './components/SuperHeroes/SuperheroDetails';
import SuperheroForm from './components/SuperHeroes/SuperheroForm';

function App() {
  return (
    <Router>
      <div>
        <Navbar />
        <Switch>
          <Route path="/login" component={Login} />
          <Route path="/register" component={Register} />
          <Route path="/superheroes" component={SuperheroesList} />
          <Route path="/superhero/:id" component={SuperheroDetails} />
          <Route path="/superhero-form" component={SuperheroForm} />
        </Switch>
      </div>
    </Router>
  );
}

export default App;