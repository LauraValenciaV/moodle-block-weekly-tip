# Moodle Block: Weekly Tip

This is a custom Moodle block that displays a different tip each week.  
The tips repeat in order when the list ends.

## 📌 Features
✅ Displays one tip per week based on the current week number.  
✅ Automatically cycles through the list of tips.  
✅ Easy to customize tips in the code.  

---

## 📂 Installation

1. Download or clone this repository inside your Moodle installation:  
   `moodle/blocks/weekly_tip/`

2. Go to your Moodle site as admin.  
3. Navigate to **Site administration → Notifications** to complete the installation.  
4. Add the **Weekly Tip block** to any page.

---

## 🛠 How it works
The block uses the PHP function `get_weekly_tip()` to calculate the current week (`date('W')`) and pick the correct tip from an array.

---

## 📈 Future improvements
- Move tips to language strings.
- Add admin settings to manage tips from the UI.
- Support for multiple languages.

---

## 📜 License
This plugin is licensed under the [GNU GPL v3](http://www.gnu.org/copyleft/gpl.html).

---

👩‍💻 **Author:** Laura Valencia  
📌 Repository: [moodle-block-weekly-tip](https://github.com/LauraValenciaV/moodle-block-weekly-tip)
