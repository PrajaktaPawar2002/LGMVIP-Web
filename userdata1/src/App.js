import React, { useState, useEffect } from 'react';
import './style.css';



const App = () => {
  const [users, setUsers] = useState([]);

  // async format
  
  const getData = async () => {
    const res = await fetch('https://reqres.in/api/users?page=1');
    const data = await res.json();
    setUsers(data.data);

    
  };
   
  return (


    <div>
      <h1>API call to get the user data !</h1>
      
      <div class="container">
  <div class="center">

    <button onClick={getData}>BUTTON</button>
      <div>
        {users.map((user) => (
          <div key={user.email}>{user.email}</div>
        ))}


  </div>
</div>

      
      </div>
    </div>
  );
};

export default App;






















// import logo from './logo.svg';
// import './App.css';

// function App() {
//   return (
//     <div className="App">
//       <header className="App-header">
//         <img src={logo} className="App-logo" alt="logo" />
//         <p>
//           Edit <code>src/App.js</code> and save to reload.
//         </p>
//         <a
//           className="App-link"
//           href="https://reactjs.org"
//           target="_blank"
//           rel="noopener noreferrer"
//         >
//           Learn React
//         </a>
//       </header>
//     </div>
//   );
// }

// export default App;
