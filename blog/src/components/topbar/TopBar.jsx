import "./topbar.css"

export default function topbar() {
  return (
    <div className="top">
        <div className="topLeft">
        <i className="topIcon fab fa-facebook-square"></i>
        <i className="topIcon fab fa-instagram-square"></i>
        <i className="topIcon fab fa-pinterest-square"></i>
        <i className="topIcon fab fa-twitter-square"></i>
      </div>
      <div className="topCenter">
         <ul className="toplist">
            <li className = "topListItem">HOME</li>
            <li className = "topListItem">ABOUT</li>
            <li className = "topListItem">CONTACT</li>
            <li className = "topListItem">ARTICLES</li>
            </ul>
            </div>
      <div className="topRight">
        
        <img className = "topImg" src="medical-1849086_1280.png" alt="" />
        <i className ="topSearchIcon fa-solid fa-magnifying-glass"></i>
      </div>
      </div>
  )
}