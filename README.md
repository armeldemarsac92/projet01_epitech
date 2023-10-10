# Projet01_Epitech 🚀💥

> **Unearth your dream job, or become the dream for employers. Welcome to the job market revolution.**

---

## 📌 The Essence

- [Why This?](#why-this-🔥)
- [Tech Stack](#tech-stack-🛠)
- [Database Blueprint](#database-blueprint-🗃)
- [The Minds Behind The Code](#the-minds-behind-the-code-🧠)

---

## Why This? 🔥

Do you really want to scroll through another drab, lifeless job board? Nah, didn't think so. We're reinventing the wheel here—making job finding and talent hunting an actual experience. Strap in.

---

## Tech Stack 🛠

For the nerds and geeks, we're building this beast using:

- **Symphony**: Because we compose masterpieces, not just code.
- **Next.js**: React, but on steroids.
- **HTML**: The skeleton, but make it stylish.
- **PHP**: Yeah, it's not dead. Deal with it.
- **JavaScript?**: Maybe. But if we do, it's going to make your browser dance.

## Database Blueprint 🗃

No project is complete without some solid database architecture. Here's what our data dungeon looks like:

![Database Dungeon](https://raw.githubusercontent.com/armeldemarsac92/projet01_epitech/main/informations/MCD.svg)

### Relationships That Make The Matrix 💎🔗

🔥 **HasDegree**: `0N CANDIDAT, 11 DEGREE`  
- A candidate might wear academic medals from various institutions.
- Each degree is uniquely earned and belongs to one candidate's scholarly journey.

🔥 **HasFaved**: `0N CANDIDAT, 0N JOB_OFFER`  
- To favorite or not to favorite, that is the question. A candidate might have a few prized job offers they've starred.
- Each job offer might have caught the eye of a candidate, waiting to be a potential match.

🔥 **PublishedBy**: `0N ENTREPRISE, 11 JOB_OFFER`  
- An enterprise may have several job challenges awaiting worthy candidates.
- Each job offer heralds from one unique enterprise, echoing its values and missions.

🔥 **HasApplied**: `0N CANDIDAT, 0N JOB_OFFER`  
- A candidate's quest might involve applying to various job challenges. Or perhaps, they're just surveying the landscape.
- Each job offer waits in anticipation, hoping to be the chosen quest for a candidate.

🔥 **WasAt**: `0N ENTREPRISE, 11 PROFESSIONNAL_EXPERIENCE`  
- An enterprise serves as the backdrop to many a professional tale. From short stints to legendary careers.
- Each professional chapter is set in one enterprise, marking its influence on a candidate's journey.

🔥 **UsedSkill**: `0N PROFESSIONNAL_EXPERIENCE, 0N COMPETENCE`  
- Every professional chapter sees the use of various skills, be it mastery in a tool or strategic prowess.
- A skill can be a protagonist in several professional tales, shaping the outcomes.

🔥 **HasCertification**: `0N CANDIDAT, 0N CERTIFICATION`  
- A candidate might possess certifications, badges of honor in their professional realm.
- Certifications can be companions to one or many candidates, vouching for their expertise.

🔥 **HasExperience**: `0N CANDIDAT, 11 PROFESSIONNAL_EXPERIENCE`  
- Chronicles of a candidate's professional journey, each experience adds to their saga.
- Each professional experience is a chapter in a candidate's book, narrating their challenges and triumphs.

🔥 **UsedTool**: `0N PROFESSIONNAL_EXPERIENCE, 0N TOOL`  
- Tools are the trusted sidekicks in a professional's journey, aiding them in their quests.
- A tool might be part of numerous tales, its story interwoven with that of the professionals who wielded it.

---

## The Minds Behind The Code 🧠

This isn't just code; it's a statement. Brought to you by the code warriors:
  
- **Armel Tandeau de Marsac**: The Guardian of Backend Realms
- **Mathieu Behan**: The Whisperer of Frontend Elements

---

&copy; 2023, The Future of Job Hunting. All Rights Reserved.
