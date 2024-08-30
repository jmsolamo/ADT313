import './App.css';
import Name from './component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';

function App() {

  const userInfo = {
    firstName: "JAMES MICHAEL",
    lastName: "SOLAMO",
    section: "BSIT3A",
    description: "POGI"

  }

  return (
    <div className="App">
      <Name fname={userInfo.firstName} lname={userInfo.lastName}/>
      <Section section={userInfo.section}/>
      <Description description={userInfo.description}/>
    </div>
  );
}

export default App;
