import React, { Component } from 'react'
import Plan from './Plan'
import '../node_modules/bootstrap/dist/css/bootstrap.min.css'
import './App.css';

// function image() {
//   return (
//     <div className="App">
//       <img src={require('./images/image.jpg')} alt="image image" />
//     </div>

//   );
// }

class App extends Component {
  state = {
    items: [],
    text: ""
  }
  handleChange = e => {
    this.setState({ text: e.target.value })
  }
  handleAdd = e => {
    if (this.state.text !== "") {
      const items = [...this.state.items, this.state.text];
      this.setState({ items: items, text: "" });
    }
  }
  handleDelete = id => {
    console.log("Deleted", id);
    const Olditems = [...this.state.items]
    console.log("Olditems", Olditems);
    const items = Olditems.filter((element, i) => {
      return i !== id
    })
    console.log("Newitems", items);
    this.setState({ items: items });
  }

  render() {
    return (
      <div className="container-fluid my-5">
        <div className="row">
          <div className="col-sm-6 mx-auto text-white shadow-lg p-3">
            <h2 className="text-center"> TODO LIST !(What's the plan for today ?) </h2>


            
            <h4>Tasks</h4>
            <div className="container-fluid">
              <div className="row">
                <div className="col-9">
                  <input type="text" className="form-control" placeholder="Add a todo" value={this.state.text} onChange={this.handleChange} />
                </div>
                
                <div className="col-2">
                {/* <button type="button" class="btn btn-outline-primary">Primary</button> */}
                  <button type="button" className="btn btn-outline-info px-5 font-weight-bold" onClick={this.handleAdd}>Add task</button>
                </div>
              </div>
              <div className="conatiner">
                <ul className="list-unstyled row m-5">
                  {
                    this.state.items.map((value, i) => {
                      return <Plan key={i} id={i} value={value} sendData={this.handleDelete} />
                    })
                  }
                </ul>
                {}
              </div>
            </div>

          </div>
        </div>
      </div>
    )
  }
}

export default App;
