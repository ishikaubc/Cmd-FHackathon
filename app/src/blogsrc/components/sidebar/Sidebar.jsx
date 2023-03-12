import "./sidebar.css"

export default function Sidebar() {
  return (
    <div className = "sidebar">
        <div className="sidebarItem">
            <span className = "sidebarTitle">BLOOD DONATION</span>
            <img src = "blood .webp" alt=""></img>
            <p>Blood supply can vary depending on the location and time of year, but blood shortages can occur at any time. In some regions and countries, blood supplies may be insufficient to meet the demand for blood transfusions due to a variety of reasons, including natural disasters, emergencies, or during the holiday season when donations tend to decrease.

The COVID-19 pandemic has also impacted blood donation rates worldwide, as many people are hesitant to donate due to fear of exposure or because of restrictions on blood drives and collection centres. In addition, the pandemic has resulted in a significant decrease in blood donations due to the cancellation of blood drives and the closure of businesses and schools that typically host blood drives.

To help address blood shortages, blood donation organizations continuously encourage eligible individuals to donate blood and host blood drives in various locations. It's important for eligible individuals to consider donating blood regularly to help maintain an adequate supply of blood for medical facilities and those in need.</p>
        
    </div>
    <div className = "sidebarItem">
    <span className = "sidebarTitle">TIPS TO FOLLOW</span>
    <ul className = "sidebarList">
        <li className = "sidebarListItem">Eat a healthy meal: Eat a nutritious meal and drink plenty of fluids especially water before your donation to avoid dehydration and prevent dizziness or fainting.</li>
        <li className = "sidebarListItem">Get enough rest: Make sure you get enough sleep the night before, and avoid alcohol or recreational drugs at least 24 hours before donating blood.</li>
        <li className = "sidebarListItem">Wear comfortable clothing: Wear comfortable and loose-fitting clothing that allows for easy access to the arm for the blood draw.</li>
        <li className = "sidebarListItem">Bring identification: Bring a valid form of identification such as a driver's license or passport and any necessary donation paperwork or forms.</li>
        <li className = "sidebarListItem">Disclose your medical history: Be honest about your medical history, medications, and any recent illnesses or vaccinations, as this may affect your eligibility to donate blood.</li>
        <li className = "sidebarListItem">Be prepared for the process: The blood donation process usually takes around 30-45 minutes. You will be asked some health-related questions, and a mini-physical will be performed. After that, the actual blood draw usually takes less than 15 minutes.</li>
    </ul>

    </div>
    </div>

      

  )
}



 



