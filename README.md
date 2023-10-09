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

---

## Database Blueprint 🗃

No project is complete without some solid database architecture. Here's what our data dungeon looks like:

![Database Dungeon](https://raw.githubusercontent.com/armeldemarsac92/projet01_epitech/main/informations/MCD.svg)

### Relationships That Make The Matrix 💎🔗

🔥 **HasExperience**: `0N CANDIDAT, 11 PROFESSIONNAL_EXPERIENCE`  
- Your resume is your lore; a candidate may or may not have epic tales of past work.
- Each tale of professional heroism is inked to one and only one champion, a.k.a., the candidate.

🔥 **WorkedAt**: `0N ENTREPRISE, 11 PROFESSIONNAL_EXPERIENCE`  
- An enterprise can be a startup battlefield or an established kingdom; might not have any war stories yet.
- Every work battle is fought under the banner of one enterprise. Always.

🔥 **PublishedBy**: `0N ENTREPRISE, 11 JOB_OFFER`  
- The enterprise either shouts job quests from the mountaintops or remains an enigma.
- Each job quest has a herald; published by one and only one enterprise.

🔥 **HasCertification**: `0N CANDIDAT, 0N CERTIFICATION`  
- A candidate might wield certifications like Excalibur or simply trust their raw skill.
- A certification might be collecting dust in an archive or adorning a candidate's wall.

🔥 **HasSkill**: `0N CANDIDAT, 0N COMPETENCE`  
- Skill trees? A candidate may or may not have unlocked any.
- A skill can be the stuff of legend or yet to be discovered.

🔥 **UsesTool**: `0N CANDIDAT, 0N TOOL`  
- Toolbelt full or empty? A candidate's choice.
- Each tool awaits its master. Could be you, could be no one.

🔥 **HasFaved**: `0N CANDIDAT, 0N JOB_OFFER`  
- Ever faved something just because it looked cool? A candidate might or might not have.
- Each job offer is like a tweet, awaiting your precious fave.

🔥 **HasApplied**: `0N CANDIDAT, 0N JOB_OFFER`  
- Swipe right or left? A candidate might not have chosen their quests yet.
- Every quest (job offer) waits for its hero (candidate). Are you the one?

---

## The Minds Behind The Code 🧠

This isn't just code; it's a statement. Brought to you by the code warriors:
  
- **Armel Tandeau de Marsac**: The Guardian of Backend Realms
- **Mathieu Behan**: The Whisperer of Frontend Elements

---

&copy; 2023, The Future of Job Hunting. All Rights Reserved.
