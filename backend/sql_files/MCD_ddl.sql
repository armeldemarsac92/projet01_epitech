CREATE TABLE CANDIDAT (
  candidate_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  candidate_first_name VARCHAR(42),
  candidate_last_name VARCHAR(42),
  candidate_sex VARCHAR(6),
  candidate_email VARCHAR(255),
  candidate_phone_number VARCHAR(12),
  candidate_localisation VARCHAR(255),
  candidate_about MEDIUMTEXT,
  candidate_profile_picture VARCHAR(255),
  candidate_cover_picture VARCHAR(255),
  candidate_status VARCHAR(255)
);

CREATE TABLE CERTIFICATION (
  certification_name VARCHAR(80) NOT NULL PRIMARY KEY,
  certification_icon VARCHAR(255)
);

CREATE TABLE COMPETENCE (
  competence_name VARCHAR(42) NOT NULL PRIMARY KEY,
  competence_icon VARCHAR(255)
);

CREATE TABLE DEGREE (
  degree_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  degree_name VARCHAR(42),
  degree_school VARCHAR(42),
  degree_start_date DATE,
  degree_end_date DATE,
  candidate_id INT NOT NULL
);

CREATE TABLE ENTREPRISE (
  entreprise_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  entreprise_name VARCHAR(42),
  entreprise_field VARCHAR(255),
  entreprise_about MEDIUMTEXT,
  entreprise_number_of_workers INT,
  entreprise_date_of_creation DATE,
  entreprise_localisation VARCHAR(255),
  entreprise_desired_profiles MEDIUMTEXT,
  entreprise_average_age INT,
  entreprise_profile_picture VARCHAR(255),
  entreprise_cover_picture VARCHAR(255)
);

CREATE TABLE HOBBY (
  hobby_name VARCHAR(42) NOT NULL PRIMARY KEY,
  hobby_about MEDIUMTEXT
);

CREATE TABLE Has_Applied (
  candidate_id INT NOT NULL,
  offer_id INT NOT NULL,
  PRIMARY KEY (candidate_id, offer_id)
);

CREATE TABLE Has_Certification (
  candidate_id INT NOT NULL,
  certification_name VARCHAR(80) NOT NULL,
  PRIMARY KEY (candidate_id, certification_name)
);

CREATE TABLE Has_Faved (
  candidate_id INT NOT NULL,
  offer_id INT NOT NULL,
  PRIMARY KEY (candidate_id, offer_id)
);

CREATE TABLE Has_hobby (
  candidate_id INT NOT NULL,
  hobby_name VARCHAR(42) NOT NULL,
  PRIMARY KEY (candidate_id, hobby_name)
);

CREATE TABLE JOB_OFFER (
  offer_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  offer_title VARCHAR(255),
  offer_contract_length VARCHAR(42),
  offer_publication_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  offer_about MEDIUMTEXT,
  offer_expected_work MEDIUMTEXT,
  offer_annual_salary INT,
  offer_studies_requirement VARCHAR(42),
  entreprise_id INT NOT NULL
);

CREATE TABLE LANGUAGE (
  language_name VARCHAR(42) NOT NULL PRIMARY KEY,
  language_level VARCHAR(42)
);

CREATE TABLE PROFESSIONNAL_EXPERIENCE (
  experience_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  experience_start_date DATE,
  experience_end_date DATE,
  experience_job_title VARCHAR(42),
  experience_description MEDIUMTEXT,
  candidate_id INT NOT NULL,
  entreprise_id INT NOT NULL
);

CREATE TABLE Speaks_language (
  candidate_id INT NOT NULL,
  language_name VARCHAR(42) NOT NULL,
  PRIMARY KEY (candidate_id, language_name)
);

CREATE TABLE TOOL (
  tool_name VARCHAR(42) NOT NULL PRIMARY KEY,
  tool_icon VARCHAR(42)
);

CREATE TABLE Used_Competence (
  experience_id INT NOT NULL,
  competence_name VARCHAR(80) NOT NULL,
  PRIMARY KEY (experience_id, competence_name)
);

CREATE TABLE Used_Tool (
  experience_id INT NOT NULL,
  tool_name VARCHAR(42) NOT NULL,
  PRIMARY KEY (experience_id, tool_name)
);


ALTER TABLE DEGREE ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);
ALTER TABLE Has_Applied ADD FOREIGN KEY (offer_id) REFERENCES JOB_OFFER (offer_id);
ALTER TABLE Has_Applied ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);
ALTER TABLE Has_Certification ADD FOREIGN KEY (certification_name) REFERENCES CERTIFICATION (certification_name);
ALTER TABLE Has_Certification ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);
ALTER TABLE Has_Faved ADD FOREIGN KEY (offer_id) REFERENCES JOB_OFFER (offer_id);
ALTER TABLE Has_Faved ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);
ALTER TABLE Has_hobby ADD FOREIGN KEY (hobby_name) REFERENCES HOBBY (hobby_name);
ALTER TABLE Has_hobby ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);
ALTER TABLE JOB_OFFER ADD FOREIGN KEY (entreprise_id) REFERENCES ENTREPRISE (entreprise_id);
ALTER TABLE PROFESSIONNAL_EXPERIENCE ADD FOREIGN KEY (entreprise_id) REFERENCES ENTREPRISE (entreprise_id);
ALTER TABLE PROFESSIONNAL_EXPERIENCE ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);
ALTER TABLE Speaks_language ADD FOREIGN KEY (language_name) REFERENCES LANGUAGE (language_name);
ALTER TABLE Speaks_language ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);
ALTER TABLE Used_Skill ADD FOREIGN KEY (competence_name) REFERENCES COMPETENCE (competence_name);
ALTER TABLE Used_Skill ADD FOREIGN KEY (experience_id) REFERENCES PROFESSIONNAL_EXPERIENCE (experience_id);
ALTER TABLE Used_Tool ADD FOREIGN KEY (tool_name) REFERENCES TOOL (tool_name);
ALTER TABLE Used_Tool ADD FOREIGN KEY (experience_id) REFERENCES PROFESSIONNAL_EXPERIENCE (experience_id);
