import React, { Component } from 'react';
import './App.css';

class App extends Component {
  state= {
    Compteur:1
  }
  incrementer= ()=>{
    this.setState({
      Compteur: ++this.state.compteur,
    })
  }
  decrementer=()=>{
    this.setState ({
      Compteur: --this.state.compteur,
    })
    console.log("State");
  }

  render() {
   
    return (
      <div className="App">
      <p>Compteur</p>
      <p>{this.state.Compteur}</p>
      <input type="button" value="+" onClick={this.incrementer}/>
      <input type="button" value="-" onClick={this.decrementer}/>
      </div>
    );
  }
  
}

export default App;
