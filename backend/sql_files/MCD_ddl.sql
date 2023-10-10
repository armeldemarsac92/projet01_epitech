CREATE TABLE CANDIDAT (
  PRIMARY KEY (candidate_id),
  candidate_id VARCHAR(42) NOT NULL,
  candidate_first_name VARCHAR(20) NOT NULL,
  candidate_last_name VARCHAR(42) NOT NULL,
  candidate_sex VARCHAR(6) NOT NULL,
  candidate_email VARCHAR(255) NOT NULL,
  candidate_phone_number VARCHAR(12) NOT NULL,
  candidate_localisation VARCHAR(255),
  candidate_about TEXT,
  candidate_profile_picture VARCHAR(255),
  candidate_cover_picture VARCHAR(255),
  candidate_status VARCHAR(255)
);

CREATE TABLE CERTIFICATION (
  PRIMARY KEY (certification_name),
  certification_name VARCHAR(42) NOT NULL,
  certification_icon VARCHAR(255)
);

CREATE TABLE COMPETENCE (
  PRIMARY KEY (competence_name),
  competence_name VARCHAR(42) NOT NULL,
  competence_icon VARCHAR(255)
);

CREATE TABLE ENTREPRISE (
  PRIMARY KEY (entreprise_id),
  entreprise_id VARCHAR(42) NOT NULL,
  entreprise_name VARCHAR(42) NOT NULL,
  entreprise_field VARCHAR(42),
  entreprise_about VARCHAR(42),
  entreprise_number_of_workers INT,
  entreprise_date_of_creation DATE,
  entreprise_localisation VARCHAR(255),
  entreprise_desired_profiles TEXT,
  entreprise_average_age INT,
  entreprise_profile_picture VARCHAR(255),
  entreprise_cover_picture VARCHAR(255)
);

CREATE TABLE Has_Applied (
  PRIMARY KEY (candidate_id, offer_id),
  candidate_id VARCHAR(42) NOT NULL,
  offer_id VARCHAR(42) NOT NULL
);

CREATE TABLE Has_Certification (
  PRIMARY KEY (candidate_id, certification_name),
  candidate_id VARCHAR(42) NOT NULL,
  certification_name VARCHAR(42) NOT NULL
);

CREATE TABLE Has_Faved (
  PRIMARY KEY (candidate_id, offer_id),
  candidate_id VARCHAR(42) NOT NULL,
  offer_id VARCHAR(42) NOT NULL
);

CREATE TABLE Has_Skill (
  PRIMARY KEY (candidate_id, competence_name),
  candidate_id VARCHAR(42) NOT NULL,
  competence_name VARCHAR(42) NOT NULL
);

CREATE TABLE JOB_OFFER (
  PRIMARY KEY (offer_id),
  offer_id VARCHAR(42) NOT NULL,
  offer_title VARCHAR(255) NOT NULL,
  offer_contract_length VARCHAR(42) NOT NULL,
  offer_publication_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  offer_about TEXT NOT NULL,
  offer_expected_work TEXT NOT NULL,
  entreprise_id VARCHAR(42) NOT NULL
);

CREATE TABLE PROFESSIONNAL_EXPERIENCE (
  PRIMARY KEY (experience_id),
  experience_id VARCHAR(42) NOT NULL,
  experience_start_date DATE,
  experience_end_date DATE,
  experience_job_title VARCHAR(255) NOT NULL,
  experience_description TEXT NOT NULL,
  entreprise_id VARCHAR(42) NOT NULL,
  candidate_id VARCHAR(42) NOT NULL
);

CREATE TABLE TOOL (
  PRIMARY KEY (tool_name),
  tool_name VARCHAR(42) NOT NULL,
  tool_icon VARCHAR(42)
);

CREATE TABLE Uses_Tool (
  PRIMARY KEY (candidate_id, tool_name),
  candidate_id VARCHAR(42) NOT NULL,
  tool_name VARCHAR(42) NOT NULL
);

ALTER TABLE Has_Applied ADD FOREIGN KEY (offer_id) REFERENCES JOB_OFFER (offer_id);
ALTER TABLE Has_Applied ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);

ALTER TABLE Has_Certification ADD FOREIGN KEY (certification_name) REFERENCES CERTIFICATION (certification_name);
ALTER TABLE Has_Certification ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);

ALTER TABLE Has_Faved ADD FOREIGN KEY (offer_id) REFERENCES JOB_OFFER (offer_id);
ALTER TABLE Has_Faved ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);

ALTER TABLE Has_Skill ADD FOREIGN KEY (competence_name) REFERENCES COMPETENCE (competence_name);
ALTER TABLE Has_Skill ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);

ALTER TABLE JOB_OFFER ADD FOREIGN KEY (entreprise_id) REFERENCES ENTREPRISE (entreprise_id);

ALTER TABLE PROFESSIONNAL_EXPERIENCE ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);
ALTER TABLE PROFESSIONNAL_EXPERIENCE ADD FOREIGN KEY (entreprise_id) REFERENCES ENTREPRISE (entreprise_id);

ALTER TABLE Uses_Tool ADD FOREIGN KEY (tool_name) REFERENCES TOOL (tool_name);
ALTER TABLE Uses_Tool ADD FOREIGN KEY (candidate_id) REFERENCES CANDIDAT (candidate_id);
