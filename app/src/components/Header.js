import './Header.css'

// const SearchBar = ({keyword, onChange}) => {
//     const BarStyle = {width:"20rem",background:"#F0F0F0", border:"none", padding:"0.5rem"};
//     return (
//       <input 
//        style={BarStyle}
//        key="search-bar"
//        value={keyword}
//        placeholder={"search news"}
//        onChange={(e) => onChange(e.target.value)}
//       />
//     );
// }


function Header() {
    return (
        <header className='header'>
            <img src="./images/logo.svg"></img>
            
            <h2>LifeConnect</h2>
            <input></input>
            <div className='sub-header'>
                <h4>Blog</h4><h4>Forum</h4><h4>Sign up</h4>
            </div>


        </header>
    );
}

export default Header;