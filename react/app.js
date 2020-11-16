
class App extends React.Component {

  state = {
    section: {}
  };

  componentDidMount(){
    fetch('http://localhost:3000/apip/articles/14')
    .then((response) => {
      return response.json()
    })
    .then((result) => {
      this.setState({section: result})
      console.log(result)
    })
  }

  
  render() {
    const titre = "liste de test";
    return (
      <div>
        <h1>{this.state.section.title}</h1>
        <p>{this.state.section.content}</p>
        {this.state.section.image}
      </div>
    );
  }
}

const rootElement = document.getElementById("root");
ReactDOM.render(<App />, rootElement);

