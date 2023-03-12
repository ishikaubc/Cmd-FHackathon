import "./header.css"

export default function header() {
  return (
    <div className = "header">
        <div className = "headerTitles">
            <span className = "headerTitleSm">LifeConnect</span>
            <span className= "headerTitleLg">Blog</span>
        </div>
        <img className = "headerImg" src = "healthcare1.webp" alt=""/>
    </div>
  )
}
