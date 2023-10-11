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

## Relationships Unraveled 🌀🔗

- 🔥 **Has_Degree**: `0N CANDIDAT, 11 DEGREE`  
    - A candidate's backpack of academic trophies.
    - Every degree is an emblem of one champion's quest.

- 🔥 **Has_Hobby**: `0N CANDIDAT, 0N HOBBY`  
    - Does a candidate juggle fireballs or knit ethereal scarves?
    - Each hobby is a chapter in a candidate's personal epic.

- 🔥 **Has_Certification**: `0N CANDIDAT, 0N CERTIFICATION`  
    - Some wield these like legendary artifacts, some await their first.
    - Every certification belongs to a vault, either revered or yet to be claimed.

- 🔥 **Has_Faved**: `0N CANDIDAT, 0N JOB_OFFER`  
    - Ever favored a quest because it sparkled? A candidate might or might not have.
    - Each job offer is a star in the jobiverse, waiting to be favored.

- 🔥 **Speaks_Language**: `0N CANDIDAT, 0N LANGUAGE`  
    - How many languages has the hero tamed? The tale is told here.

- 🔥 **Has_Experience**: `0N CANDIDAT, 11 PROFESSIONNAL_EXPERIENCE`  
    - Every champion has tales; some more epic than others.

- 🔥 **Has_Applied**: `0N CANDIDAT, 0N JOB_OFFER`  
    - Every quest awaits its hero. Will the candidate pick the gauntlet?

- 🔥 **Used_Tool**: `0N PROFESSIONNAL_EXPERIENCE, 0N TOOL`  
    - Every craftsman has their favorite tool; the stories of which are told here.

- 🔥 **Published_By**: `0N ENTREPRISE, 11 JOB_OFFER`  
    - From which kingdom do the quests emanate? The saga unfolds here.

- 🔥 **Was_At**: `0N ENTREPRISE, 11 PROFESSIONNAL_EXPERIENCE`  
    - Every tale of valor is sung under a banner; the enterprise's.

- 🔥 **Used_Skill**: `0N PROFESSIONNAL_EXPERIENCE, 0N COMPETENCE`  
    - The tales of where and how these skills were wielded in battle.

---

## The Minds Behind The Code 🧠

This isn't just code; it's a statement. Brought to you by the code warriors:
  
- **Armel Tandeau de Marsac**: The Guardian of Backend Realms
- **Mathieu Behan**: The Whisperer of Frontend Elements

---

&copy; 2023, The Future of Job Hunting. All Rights Reserved.
