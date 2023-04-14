const {useState} = React;
function ButtonCount() {
    const [clickCount, serClickCount] = useState(0);
    function handleClick() {
        serClickCount(clickCount + 1);
    }
    return (
        <button onClick={handleClick}>
            Time Clicked: {clickCount}
        </button>
    )
}

ReactDOM.render(<ButtonCount />, document.getElementById("react-app"));