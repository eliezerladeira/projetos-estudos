import { useState } from 'react';
import { Header } from './components/Header';
import { Footer } from './components/Footer';

const App = () => {
  //let name = "Eliezer";
  //let age = 20;
  // state = variável que pode ser modificada
  // bg: nome da variável - setBg: função que vai usar essa variável
  const [name, setName] = useState('Eliezer');
  const [age, setAge] = useState(90);
  const [bg, setBg] = useState('#FF0000')

  const [list, setList] = useState([
    "O rato roeu a roupa do rei de roma.",
    "aqui vai uma frase poética.",
    "totalmente sem inspiração."
  ]);

  const handle20 = () => {
    setAge(20);
    setBg("#00FF00");
  }

  const handle90 = () => {
    setAge(90);
    setBg("#FF0000");
  }

  return (
    <div style={{backgroundColor: bg}}>
      <Header name={name} age={age} />

      { age === 90 && 
        <button onClick={handle20}>Tenho 20 anos.</button>
      }

      { age === 20 &&
        <button onClick={handle90}>Tenho 90 anos.</button>
      }

      <hr />

      <ul>
        {list.map((frase, index)=>(
          <li key={index}>{frase}</li>
        ))}
      </ul>

      <Footer />
    </div>
  )
}

export default App;