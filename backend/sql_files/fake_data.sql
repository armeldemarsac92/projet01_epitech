-- CANDIDAT
INSERT INTO CANDIDAT (candidate_first_name, candidate_last_name, candidate_sex, candidate_email, candidate_phone_number, candidate_localisation, candidate_about, candidate_profile_picture, candidate_cover_picture, candidate_status)
VALUES
('John', 'Doe', 'Male', 'john.doe@gmail.com', '1234567890', 'New York', 'Experienced software engineer with expertise in full stack development.', 'john_doe_profile.jpg', 'john_doe_cover.jpg', 'Active'),
('Alice', 'Johnson', 'Female', 'alice.johnson@outlook.com', '1234567891', 'Los Angeles', 'Passionate data scientist with an eye for detail.', 'alice_johnson_profile.jpg', 'alice_johnson_cover.jpg', 'Active'),
('Bob', 'Smith', 'Male', 'bob.smith@yahoo.com', '1234567892', 'Chicago', 'DevOps specialist with 5 years in cloud infrastructure.', 'bob_smith_profile.jpg', 'bob_smith_cover.jpg', 'Active'),
('Eve', 'Martin', 'Female', 'eve.martin@hotmail.com', '1234567893', 'Houston', 'Dedicated project manager with experience leading cross-functional teams.', 'eve_martin_profile.jpg', 'eve_martin_cover.jpg', 'Active'),
('Charlie', 'Brown', 'Male', 'charlie.brown@domain.com', '1234567894', 'Phoenix', 'Front-end developer specialized in React and Angular.', 'charlie_brown_profile.jpg', 'charlie_brown_cover.jpg', 'Active'),
('Diane', 'Wilson', 'Female', 'diane.wilson@company.com', '1234567895', 'Philadelphia', 'UI/UX designer with a flair for creating intuitive designs.', 'diane_wilson_profile.jpg', 'diane_wilson_cover.jpg', 'Active'),
('Edward', 'Davis', 'Male', 'edward.davis@org.com', '1234567896', 'San Antonio', 'Backend developer skilled in Java and Python.', 'edward_davis_profile.jpg', 'edward_davis_cover.jpg', 'Active'),
('Fay', 'Garcia', 'Female', 'fay.garcia@web.com', '1234567897', 'San Diego', 'Experienced tester with a knack for finding bugs.', 'fay_garcia_profile.jpg', 'fay_garcia_cover.jpg', 'Active'),
('Greg', 'Lopez', 'Male', 'greg.lopez@site.com', '1234567898', 'Dallas', 'Mobile app developer specializing in iOS and Android.', 'greg_lopez_profile.jpg', 'greg_lopez_cover.jpg', 'Active'),
('Holly', 'Martinez', 'Female', 'holly.martinez@page.com', '1234567899', 'San Jose', 'Cybersecurity expert with a background in network security.', 'holly_martinez_profile.jpg', 'holly_martinez_cover.jpg', 'Active'),
('Ian', 'Hernandez', 'Male', 'ian.hernandez@myweb.com', '1234567800', 'Austin', 'Database administrator experienced in both SQL and NoSQL databases.', 'ian_hernandez_profile.jpg', 'ian_hernandez_cover.jpg', 'Active'),
('Jill', 'Robinson', 'Female', 'jill.robinson@online.com', '1234567801', 'Jacksonville', 'Tech lead with a passion for team collaboration and agile methodologies.', 'jill_robinson_profile.jpg', 'jill_robinson_cover.jpg', 'Active'),
('Kevin', 'Walker', 'Male', 'kevin.walker@net.com', '1234567802', 'Fort Worth', 'Experienced network engineer with expertise in large-scale infrastructures.', 'kevin_walker_profile.jpg', 'kevin_walker_cover.jpg', 'Active'),
('Linda', 'Perez', 'Female', 'linda.perez@internet.com', '1234567803', 'Columbus', 'Digital marketer with a focus on SEO and SEM strategies.', 'linda_perez_profile.jpg', 'linda_perez_cover.jpg', 'Active'),
('Mike', 'King', 'Male', 'mike.king@webpage.com', '1234567804', 'San Francisco', 'Machine learning engineer passionate about deep learning.', 'mike_king_profile.jpg', 'mike_king_cover.jpg', 'Active'),
('Nancy', 'White', 'Female', 'nancy.white@site.org', '1234567805', 'Charlotte', 'Blockchain enthusiast with a history in fintech innovations.', 'nancy_white_profile.jpg', 'nancy_white_cover.jpg', 'Active'),
('Oscar', 'Harris', 'Male', 'oscar.harris@email.com', '1234567806', 'Indianapolis', 'Full stack developer with a passion for modern web technologies.', 'oscar_harris_profile.jpg', 'oscar_harris_cover.jpg', 'Active'),
('Pamela', 'Clark', 'Female', 'pamela.clark@domain.net', '1234567807', 'Seattle', 'DevOps specialist with a focus on continuous integration and deployment.', 'pamela_clark_profile.jpg', 'pamela_clark_cover.jpg', 'Active'),
('Quincy', 'Anderson', 'Male', 'quincy.anderson@company.net', '1234567808', 'Denver', 'Experienced game developer specialized in Unity and Unreal Engine.', 'quincy_anderson_profile.jpg', 'quincy_anderson_cover.jpg', 'Active'),
('Rita', 'Young', 'Female', 'rita.young@web.org', '1234567809', 'El Paso', 'Data analyst with a background in financial modeling and statistics.', 'rita_young_profile.jpg', 'rita_young_cover.jpg', 'Active');

--- ENTREPRISE
INSERT INTO ENTREPRISE (
    entreprise_name, entreprise_field, entreprise_about, entreprise_number_of_workers, 
    entreprise_date_of_creation, entreprise_localisation, entreprise_desired_profiles, 
    entreprise_average_age, entreprise_profile_picture, entreprise_cover_picture
)
VALUES
('TechSolutions', 'Technology', 'Leading provider of tech solutions worldwide.', 500, '1995-06-15', 'San Francisco', 'Software Developers, Data Scientists', 32, 'techsolutions_logo.jpg', 'techsolutions_cover.jpg'),
('DataWise', 'Data Analytics', 'Data-driven solutions for modern businesses.', 300, '2000-01-20', 'New York', 'Data Analysts, Data Engineers', 30, 'datawise_logo.jpg', 'datawise_cover.jpg'),
('CloudCrafter', 'Cloud Computing', 'Pioneers in cloud technology and infrastructures.', 450, '2005-03-12', 'Seattle', 'Cloud Architects, SysAdmins', 33, 'cloudcrafter_logo.jpg', 'cloudcrafter_cover.jpg'),
('DevHub', 'Software Development', 'Developers'' paradise for tools and resources.', 550, '2010-11-05', 'Austin', 'Full-Stack Developers, UI/UX Designers', 29, 'devhub_logo.jpg', 'devhub_cover.jpg'),
('CircuitryTech', 'Electronics', 'Innovative solutions in electronics and circuitry.', 600, '1988-04-23', 'Boston', 'Electronics Engineers, Designers', 34, 'circuitrytech_logo.jpg', 'circuitrytech_cover.jpg'),
('AI Innovators', 'Artificial Intelligence', 'Leading the charge in AI innovations and research.', 400, '2015-07-30', 'San Diego', 'AI Researchers, Machine Learning Engineers', 31, 'aiinnovators_logo.jpg', 'aiinnovators_cover.jpg'),
('WebCrafters', 'Web Development', 'Crafting superior web experiences for users.', 530, '2012-02-14', 'Los Angeles', 'Front-End Developers, Back-End Developers', 28, 'webcrafters_logo.jpg', 'webcrafters_cover.jpg'),
('SecureNet', 'Cybersecurity', 'Prioritizing your security in the digital world.', 490, '1999-08-08', 'Chicago', 'Cybersecurity Analysts, Ethical Hackers', 35, 'securenet_logo.jpg', 'securenet_cover.jpg'),
('PixelPerfect', 'Design', 'Perfecting designs one pixel at a time.', 280, '2016-12-01', 'Miami', 'Graphic Designers, Web Designers', 27, 'pixelperfect_logo.jpg', 'pixelperfect_cover.jpg'),
('QuantumTech', 'Quantum Computing', 'Revolutionizing technology with quantum computing.', 320, '2018-09-19', 'Dallas', 'Quantum Researchers, Hardware Engineers', 33, 'quantumtech_logo.jpg', 'quantumtech_cover.jpg'),
('NetSolutions', 'Networking', 'Providing networking solutions for global enterprises.', 510, '1993-10-25', 'Denver', 'Network Administrators, Cloud Engineers', 36, 'netsolutions_logo.jpg', 'netsolutions_cover.jpg'),
('GreenTech', 'Clean Technology', 'Eco-friendly tech solutions for a greener planet.', 470, '2009-05-05', 'Portland', 'Clean Energy Engineers, Sustainability Managers', 30, 'greentech_logo.jpg', 'greentech_cover.jpg'),
('BlockBusters', 'Blockchain', 'Driving innovations in blockchain technology.', 340, '2017-06-06', 'Las Vegas', 'Blockchain Developers, Crypto Analysts', 29, 'blockbusters_logo.jpg', 'blockbusters_cover.jpg'),
('VR Visions', 'Virtual Reality', 'Bringing virtual realities to life.', 390, '2019-01-01', 'San Jose', 'VR Developers, 3D Modellers', 28, 'vrvisions_logo.jpg', 'vrvisions_cover.jpg'),
('NanoNest', 'Nanotechnology', 'Nanotechnology solutions for modern problems.', 440, '2014-03-15', 'Detroit', 'Nano-Researchers, Material Scientists', 32, 'nanonest_logo.jpg', 'nanonest_cover.jpg'),
('OptimaTech', 'Optimization', 'Optimizing technology for business excellence.', 370, '1997-07-07', 'Phoenix', 'Optimization Engineers, Analysts', 33, 'optimatch_logo.jpg', 'optimatch_cover.jpg'),
('MobileMasters', 'Mobile Technology', 'Mastering the art of mobile technology.', 520, '2011-04-04', 'San Antonio', 'Mobile App Developers, Mobile UI/UX', 28, 'mobilemasters_logo.jpg', 'mobilemasters_cover.jpg'),
('GigaGrid', 'Grid Computing', 'Powering businesses with robust grid computing.', 430, '2002-12-12', 'Nashville', 'Grid Engineers, Network Managers', 31, 'gigagrid_logo.jpg', 'gigagrid_cover.jpg'),
('EcoTronix', 'Eco Electronics', 'Marrying ecology and electronics for a better tomorrow.', 460, '2006-02-02', 'Atlanta', 'Eco Designers, Recycle Managers', 29, 'ecotronix_logo.jpg', 'ecotronix_cover.jpg'),
('FutureFusion', 'Futurism', 'Fusing technologies for a futuristic approach.', 420, '2020-10-10', 'Orlando', 'Futurists, Technological Visionaries', 30, 'futurefusion_logo.jpg', 'futurefusion_cover.jpg');

-- PROFESSIONNAL_EXPERIENCE
INSERT INTO PROFESSIONNAL_EXPERIENCE (
    experience_start_date, experience_end_date, experience_job_title, experience_description, 
    candidate_id, entreprise_id
)
VALUES
-- For Candidate 1
('2019-01-01', '2021-01-01', 'Software Developer', 'Developed and maintained key software components.', 1, 1),
('2021-02-01', '2023-01-01', 'Senior Developer', 'Led a team of developers in various projects.', 1, 2),
('2017-03-01', '2019-01-01', 'Junior Developer', 'Assisted in debugging and documentation.', 1, 3),

-- For Candidate 2
('2018-05-01', '2020-04-01', 'Data Analyst', 'Analyzed datasets for business insights.', 2, 2),
('2020-05-01', '2022-05-01', 'Senior Data Analyst', 'Managed data projects and coordinated with stakeholders.', 2, 4),
('2016-08-01', '2018-04-01', 'Data Intern', 'Assisted in cleaning and preparing datasets.', 2, 5),

-- For Candidate 3
('2017-06-01', '2019-06-01', 'Cloud Architect', 'Designed cloud infrastructure for clients.', 3, 3),
('2019-07-01', '2021-07-01', 'Senior Cloud Architect', 'Oversaw multiple cloud projects.', 3, 6),
('2015-09-01', '2017-05-01', 'Cloud Associate', 'Supported cloud migrations and deployments.', 3, 7),

-- For Candidate 4
('2016-03-01', '2018-03-01', 'Web Designer', 'Created appealing and user-friendly websites.', 4, 5),
('2018-04-01', '2020-04-01', 'Senior Web Designer', 'Managed design projects and coordinated with clients.', 4, 6),
('2020-05-01', '2023-01-01', 'UX/UI Expert', 'Enhanced user experience and interfaced with development teams.', 4, 7),

-- For Candidate 5
('2019-02-01', '2021-01-01', 'System Admin', 'Ensured smooth operations of company IT infrastructure.', 5, 8),
('2021-02-01', '2022-12-01', 'Senior System Admin', 'Led the IT support team and managed vendor relations.', 5, 9),
('2017-04-01', '2019-01-01', 'IT Support', 'Provided IT support to staff and managed backups.', 5, 10),

-- Candidate 6
('2016-11-01', '2018-11-01', 'Database Administrator', 'Managed and optimized organizational databases.', 6, 6),
('2018-12-01', '2020-12-01', 'Senior Database Admin', 'Supervised database projects and ensured data integrity.', 6, 7),
('2015-02-01', '2016-10-01', 'Database Intern', 'Supported database migrations and optimizations.', 6, 8),

-- Candidate 7
('2018-04-01', '2020-04-01', 'Network Engineer', 'Designed and maintained organizational network infrastructure.', 7, 8),
('2020-05-01', '2022-04-01', 'Senior Network Engineer', 'Led network operations and managed security protocols.', 7, 9),
('2016-09-01', '2018-03-01', 'Network Associate', 'Assisted in network installations and configurations.', 7, 10),

-- Candidate 8
('2017-07-01', '2019-07-01', 'Frontend Developer', 'Developed and optimized web interfaces.', 8, 10),
('2019-08-01', '2021-08-01', 'Senior Frontend Developer', 'Supervised frontend teams and established best practices.', 8, 11),
('2016-03-01', '2017-06-01', 'Web Intern', 'Supported web development projects and learned key skills.', 8, 12),

-- Candidate 9
('2016-02-01', '2018-01-01', 'Backend Developer', 'Designed server-side applications and ensured scalability.', 9, 11),
('2018-02-01', '2020-01-01', 'Senior Backend Developer', 'Managed backend teams and set development milestones.', 9, 12),
('2020-02-01', '2022-02-01', 'Full Stack Developer', 'Oversaw both frontend and backend developments.', 9, 13),

-- Candidate 10
('2018-06-01', '2020-06-01', 'DevOps Engineer', 'Enhanced CI/CD pipelines and improved deployment speed.', 10, 13),
('2020-07-01', '2022-05-01', 'Senior DevOps Engineer', 'Managed DevOps teams and spearheaded automation efforts.', 10, 14),
('2016-05-01', '2018-05-01', 'DevOps Intern', 'Gained hands-on experience with deployment and monitoring tools.', 10, 15),

-- Candidate 11
('2019-03-01', '2021-02-01', 'QA Engineer', 'Ensured software quality and managed testing processes.', 11, 14),
('2021-03-01', '2023-01-01', 'Senior QA Engineer', 'Oversaw QA teams and set testing benchmarks.', 11, 15),
('2017-11-01', '2019-02-01', 'QA Intern', 'Supported testing processes and learned best QA practices.', 11, 16),

-- Candidate 12
('2017-10-01', '2019-09-01', 'Mobile Developer', 'Developed mobile applications for various platforms.', 12, 16),
('2019-10-01', '2021-09-01', 'Senior Mobile Developer', 'Managed mobile development teams and set project goals.', 12, 17),
('2021-10-01', '2023-01-01', 'Mobile Architect', 'Designed mobile application architecture for large projects.', 12, 18),

-- Candidate 13
('2016-07-01', '2018-06-01', 'Security Analyst', 'Conducted security audits and vulnerability assessments.', 13, 17),
('2018-07-01', '2020-06-01', 'Senior Security Analyst', 'Oversaw security projects and enhanced defenses.', 13, 18),
('2020-07-01', '2022-06-01', 'Security Manager', 'Led security teams and managed organizational defenses.', 13, 19),

-- Candidate 14
('2016-01-01', '2018-02-01', 'Cloud Engineer', 'Managed cloud deployments across multiple platforms.', 14, 19),
('2018-03-01', '2020-03-01', 'Senior Cloud Engineer', 'Supervised cloud projects and optimized costs.', 14, 20),
('2020-04-01', '2022-03-01', 'Cloud Architect', 'Designed and reviewed cloud infrastructure for large projects.', 14, 16),

-- Candidate 15
('2017-05-01', '2019-05-01', 'Data Scientist', 'Analyzed and derived insights from large datasets.', 15, 17),
('2019-06-01', '2021-05-01', 'Senior Data Scientist', 'Managed data teams and set project milestones.', 15, 18),
('2015-09-01', '2017-04-01', 'Data Analyst', 'Supported data projects and created visualizations.', 15, 19),

-- Candidate 16
('2015-06-01', '2017-06-01', 'System Admin', 'Oversaw system deployments and managed configurations.', 16, 20),
('2017-07-01', '2019-07-01', 'Senior System Admin', 'Managed large infrastructures and ensured high availability.', 16, 16),
('2019-08-01', '2021-07-01', 'Infrastructure Engineer', 'Optimized and enhanced organizational IT infrastructure.', 16, 17),

-- Candidate 17
('2016-04-01', '2018-04-01', 'UI/UX Designer', 'Designed user-friendly and efficient interfaces.', 17, 18),
('2018-05-01', '2020-04-01', 'Lead UI/UX Designer', 'Managed design teams and oversaw design projects.', 17, 19),
('2014-08-01', '2016-03-01', 'Design Intern', 'Supported design tasks and learned industry best practices.', 17, 20),

-- Candidate 18
('2018-01-01', '2019-12-01', 'Software Tester', 'Conducted software tests to identify and report bugs.', 18, 16),
('2020-01-01', '2022-01-01', 'QA Lead', 'Managed QA teams and set testing benchmarks.', 18, 17),
('2017-03-01', '2017-12-01', 'Testing Intern', 'Assisted in test cases creation and automation.', 18, 18),

-- Candidate 19
('2016-08-01', '2018-07-01', 'Machine Learning Engineer', 'Designed ML models for various applications.', 19, 19),
('2018-08-01', '2020-07-01', 'Senior ML Engineer', 'Supervised ML projects and optimized model performance.', 19, 20),
('2020-08-01', '2022-07-01', 'AI Architect', 'Led AI teams and designed system architectures.', 19, 16),

-- Candidate 20
('2018-09-01', '2020-08-01', 'Blockchain Developer', 'Designed and deployed blockchain applications.', 20, 20),
('2020-09-01', '2022-08-01', 'Senior Blockchain Developer', 'Managed blockchain projects and set goals.', 20, 17),
('2016-07-01', '2018-08-01', 'Blockchain Intern', 'Supported blockchain deployments and learned best practices.', 20, 18);

INSERT INTO JOB_OFFER (offer_title, offer_contract_length, offer_about, offer_expected_work, offer_annual_salary, offer_studies_requirement, entreprise_id)
VALUES
-- Enterprise 1
('Software Developer', '12 months', 'We are looking for an experienced Software Developer.', 'Develop and maintain software solutions.', 60000, 'Bachelor', 1),
('Cloud Architect', '24 months', 'Seeking a Cloud Architect with expertise in AWS.', 'Design cloud infrastructures, ensure scalability.', 75000, 'Bachelor', 1),
('UX Designer', '12 months', 'Hiring a UX Designer to revamp our product interface.', 'Design user-centric interfaces.', 55000, 'Bachelor', 1),

-- Enterprise 2
('Data Scientist', '12 months', 'We are on the hunt for a Data Scientist.', 'Analyze data, create machine learning models.', 65000, 'Master', 2),
('Backend Developer', '24 months', 'Require a Backend Developer familiar with Node.js.', 'Manage server-side logic, optimize applications.', 62000, 'Bachelor', 2),
('HR Specialist', '12 months', 'Looking for an HR Specialist for recruitment.', 'Hire top talent, manage interviews.', 50000, 'Bachelor', 2),

-- Enterprise 3
('Project Manager', '18 months', 'Seeking a seasoned Project Manager.', 'Manage IT projects, ensure timely delivery.', 70000, 'Master', 3),
('Mobile Developer', '12 months', 'Hiring a Mobile Developer proficient in Flutter.', 'Develop mobile applications.', 59000, 'Bachelor', 3),
('Database Administrator', '24 months', 'Need a Database Administrator familiar with MySQL.', 'Ensure database integrity, backups.', 66000, 'Bachelor', 3),

-- Enterprise 4
('Security Analyst', '12 months', 'Looking for a Security Analyst.', 'Assess vulnerabilities, ensure system security.', 68000, 'Master', 4),
('Frontend Developer', '18 months', 'Hiring a Frontend Developer expert in React.', 'Develop user interfaces.', 60000, 'Bachelor', 4),
('Systems Engineer', '24 months', 'Seeking a Systems Engineer.', 'Manage system configurations, ensure uptime.', 71000, 'Bachelor', 4),

-- Enterprise 5
('Marketing Manager', '24 months', 'Searching for a proactive Marketing Manager.', 'Manage marketing campaigns, strategies.', 67000, 'Master', 5),
('Sales Representative', '12 months', 'Require a Sales Representative with excellent interpersonal skills.', 'Drive sales, client interactions.', 49000, 'Bachelor', 5),
('Web Designer', '18 months', 'Hiring a Web Designer with a creative mindset.', 'Design website layouts.', 56000, 'Bachelor', 5),

-- Enterprise 6
('Product Manager', '18 months', 'Looking for a dynamic Product Manager.', 'Oversee product development from concept to launch.', 72000, 'Master', 6),
('QA Engineer', '12 months', 'Seeking a QA Engineer to ensure software quality.', 'Write tests, report bugs, and ensure software quality.', 58000, 'Bachelor', 6),
('DevOps Engineer', '24 months', 'Hiring a DevOps Engineer familiar with Kubernetes.', 'Manage CI/CD pipelines, infrastructure scaling.', 69000, 'Bachelor', 6),

-- Enterprise 7
('Technical Writer', '12 months', 'Need a Technical Writer for documentation.', 'Write technical docs, API references.', 53000, 'Bachelor', 7),
('Machine Learning Engineer', '18 months', 'Looking for a skilled Machine Learning Engineer.', 'Develop and train ML models.', 73000, 'Master', 7),
('Customer Support Rep', '12 months', 'Hiring a Customer Support Representative.', 'Address customer issues, provide solutions.', 48000, 'Diploma', 7),

-- Enterprise 8
('Network Engineer', '24 months', 'Seeking a Network Engineer for infrastructure management.', 'Manage and optimize company networks.', 63000, 'Bachelor', 8),
('Business Analyst', '18 months', 'Hiring a Business Analyst for market research.', 'Analyze market trends, provide insights.', 64000, 'Bachelor', 8),
('Android Developer', '12 months', 'Need an Android Developer with Kotlin expertise.', 'Develop and maintain Android apps.', 61000, 'Bachelor', 8),

-- Enterprise 9
('HR Manager', '24 months', 'Searching for an experienced HR Manager.', 'Oversee HR functions, team building.', 68000, 'Master', 9),
('iOS Developer', '12 months', 'Hiring an iOS Developer skilled in Swift.', 'Develop and maintain iOS applications.', 61000, 'Bachelor', 9),
('Content Strategist', '18 months', 'Looking for a Content Strategist for branding.', 'Plan and execute content campaigns.', 54000, 'Bachelor', 9),

-- Enterprise 10
('Graphic Designer', '12 months', 'Need a Graphic Designer for branding.', 'Design brand assets, logos, promotional material.', 55000, 'Diploma', 10),
('E-commerce Specialist', '24 months', 'Looking for an E-commerce Specialist.', 'Manage online store, ensure sales growth.', 62000, 'Bachelor', 10),
('Logistics Manager', '18 months', 'Hiring a Logistics Manager for supply chain management.', 'Oversee product delivery, manage warehouse.', 65000, 'Bachelor', 10),

-- Enterprise 11
('Frontend Developer', '12 months', 'Seeking a skilled Frontend Developer.', 'Develop user interfaces, optimize performance.', 59000, 'Bachelor', 11),
('SEO Specialist', '18 months', 'Looking for an experienced SEO Specialist.', 'Optimize website for search engines, conduct keyword research.', 57000, 'Bachelor', 11),
('Project Manager', '24 months', 'Hiring a Project Manager for team coordination.', 'Manage projects, timelines, and team collaborations.', 66000, 'Bachelor', 11),

-- Enterprise 12
('Sales Manager', '24 months', 'Need a proactive Sales Manager.', 'Manage sales team, set targets.', 64000, 'Bachelor', 12),
('Cloud Engineer', '18 months', 'Looking for a Cloud Engineer with AWS expertise.', 'Setup and manage cloud infrastructure.', 69000, 'Bachelor', 12),
('UX Designer', '12 months', 'Seeking a UX Designer for product design.', 'Improve user experience, create wireframes.', 59000, 'Bachelor', 12),

-- Enterprise 13
('Digital Marketer', '18 months', 'Hiring a Digital Marketer for online campaigns.', 'Plan and execute digital campaigns, monitor ROI.', 60000, 'Bachelor', 13),
('System Administrator', '12 months', 'Looking for a System Administrator.', 'Manage company IT infrastructure.', 62000, 'Bachelor', 13),
('Data Scientist', '24 months', 'Seeking a Data Scientist for insights.', 'Analyze large datasets, predict trends.', 73000, 'Master', 13),

-- Enterprise 14
('Research Scientist', '18 months', 'Need a Research Scientist for new tech.', 'Conduct research, prototype solutions.', 72000, 'PhD', 14),
('Data Analyst', '12 months', 'Hiring a Data Analyst for performance metrics.', 'Analyze metrics, report findings.', 62000, 'Bachelor', 14),
('Full-stack Developer', '24 months', 'Looking for a Full-stack Developer.', 'Develop both server and client-side software.', 67000, 'Bachelor', 14),

-- Enterprise 15
('PR Specialist', '12 months', 'Seeking a PR Specialist for branding.', 'Manage public relations, press releases.', 58000, 'Bachelor', 15),
('Database Administrator', '18 months', 'Hiring a Database Administrator.', 'Manage and optimize databases.', 66000, 'Bachelor', 15),
('Web Designer', '24 months', 'Looking for a Web Designer with creativity.', 'Design and maintain company websites.', 57000, 'Diploma', 15),

-- Enterprise 16
('Backend Developer', '12 months', 'Hiring a Backend Developer for API development.', 'Develop server-side logic, maintain the database.', 65000, 'Bachelor', 16),
('Product Manager', '18 months', 'Need a Product Manager for product lifecycles.', 'Oversee product from ideation to launch.', 68000, 'Bachelor', 16),
('Content Writer', '24 months', 'Looking for a Content Writer for blogs and articles.', 'Write quality content for company’s online presence.', 52000, 'Diploma', 16),

-- Enterprise 17
('Mobile App Developer', '24 months', 'Hiring an App Developer for mobile solutions.', 'Develop apps for iOS and Android platforms.', 62000, 'Bachelor', 17),
('IT Manager', '18 months', 'Need an IT Manager to lead the tech team.', 'Manage IT resources, budgeting, and strategy.', 75000, 'Bachelor', 17),
('QA Engineer', '12 months', 'Seeking a QA Engineer for software testing.', 'Ensure the quality of software releases.', 61000, 'Bachelor', 17),

-- Enterprise 18
('DevOps Engineer', '18 months', 'Hiring a DevOps Engineer for infrastructure.', 'Work on CI/CD pipelines, server provisioning.', 69000, 'Bachelor', 18),
('UI Designer', '12 months', 'Need a UI Designer for app aesthetics.', 'Design user interfaces for apps and websites.', 59000, 'Diploma', 18),
('Security Analyst', '24 months', 'Looking for a Security Analyst for IT protection.', 'Monitor IT assets, handle breaches.', 70000, 'Bachelor', 18),

-- Enterprise 19
('Community Manager', '12 months', 'Hiring a Community Manager for social presence.', 'Engage with online communities, handle feedback.', 55000, 'Bachelor', 19),
('Hardware Engineer', '24 months', 'Need a Hardware Engineer for devices.', 'Design and test computer hardware components.', 66000, 'Bachelor', 19),
('Technical Writer', '18 months', 'Seeking a Technical Writer for documentation.', 'Write manuals, guides, and documentation.', 53000, 'Diploma', 19),

-- Enterprise 20
('Marketing Strategist', '18 months', 'Looking for a Marketing Strategist for campaigns.', 'Plan and execute marketing campaigns.', 63000, 'Bachelor', 20),
('HR Manager', '24 months', 'Hiring an HR Manager for company recruitment.', 'Handle recruitment, employee relations, and training.', 64000, 'Bachelor', 20),
('Graphic Designer', '12 months', 'Need a Graphic Designer for creative assets.', 'Design graphics for marketing and branding.', 56000, 'Diploma', 20);

INSERT INTO DEGREE (degree_name, degree_school, degree_start_date, degree_end_date, candidate_id)
VALUES
('Bachelors in Computer Science', 'University of A', '2015-09-01', '2019-06-01', 1),
('Masters in Data Science', 'University of B', '2019-09-01', '2021-06-01', 1),
('Diploma in Web Development', 'Tech Institute C', '2014-01-01', '2014-12-01', 1),

-- Degrees for Candidate 2
('Bachelors in Software Engineering', 'University of D', '2014-09-01', '2018-06-01', 2),
('Masters in Artificial Intelligence', 'University of E', '2018-09-01', '2020-06-01', 2),
('Diploma in Network Security', 'Tech Institute F', '2013-01-01', '2013-12-01', 2),

-- Degrees for Candidate 3
('Bachelors in Information Technology', 'University of G', '2016-09-01', '2020-06-01', 3),
('Masters in Machine Learning', 'University of H', '2020-09-01', '2022-06-01', 3),
('Diploma in Game Development', 'Tech Institute I', '2015-01-01', '2015-12-01', 3),

-- Degrees for Candidate 4
('Bachelors in Cyber Security', 'University of J', '2015-09-01', '2019-06-01', 4),
('Masters in IT Management', 'University of K', '2019-09-01', '2021-06-01', 4),
('Diploma in Cloud Computing', 'Tech Institute L', '2014-01-01', '2014-12-01', 4),

-- Degrees for Candidate 5
('Bachelors in Network Administration', 'University of M', '2015-09-01', '2019-06-01', 5),
('Masters in IT Consultancy', 'University of N', '2019-09-01', '2021-06-01', 5),
('Diploma in Database Administration', 'Tech Institute O', '2014-01-01', '2014-12-01', 5),

-- Degrees for Candidate 6
('Bachelors in Robotics', 'University of P', '2016-09-01', '2020-06-01', 6),
('Masters in Embedded Systems', 'University of Q', '2020-09-01', '2022-06-01', 6),
('Diploma in Mobile Development', 'Tech Institute R', '2019-01-01', '2019-12-01', 6),

-- Degrees for Candidate 7
('Bachelors in Computational Biology', 'University of S', '2016-09-01', '2020-06-01', 7),
('Masters in Quantum Computing', 'University of T', '2020-09-01', '2022-06-01', 7),
('Diploma in Graphics Design', 'Tech Institute U', '2018-01-01', '2018-12-01', 7),

-- Degrees for Candidate 8
('Bachelors in Mathematics', 'University of V', '2015-09-01', '2019-06-01', 8),
('Masters in Computational Mathematics', 'University of W', '2019-09-01', '2021-06-01', 8),
('Diploma in Statistic Analysis', 'Tech Institute X', '2014-01-01', '2014-12-01', 8),

-- Degrees for Candidate 9
('Bachelors in Electronics', 'University of Y', '2017-09-01', '2021-06-01', 9),
('Masters in Control Systems', 'University of Z', '2021-09-01', '2023-06-01', 9),
('Diploma in Power Electronics', 'Tech Institute AA', '2016-01-01', '2016-12-01', 9),

-- Degrees for Candidate 10
('Bachelors in Biomedical Engineering', 'University of AB', '2015-09-01', '2019-06-01', 10),
('Masters in Healthcare IT', 'University of AC', '2019-09-01', '2021-06-01', 10),
('Diploma in Medical Robotics', 'Tech Institute AD', '2014-01-01', '2014-12-01', 10),

-- Degrees for Candidate 11
('Bachelors in Business Analytics', 'University of AE', '2016-09-01', '2020-06-01', 11),
('Masters in Data Science', 'University of AF', '2020-09-01', '2022-06-01', 11),
('Diploma in Big Data', 'Tech Institute AG', '2019-01-01', '2019-12-01', 11),

-- Degrees for Candidate 12
('Bachelors in Financial Engineering', 'University of AH', '2015-09-01', '2019-06-01', 12),
('Masters in Quantitative Analysis', 'University of AI', '2019-09-01', '2021-06-01', 12),
('Diploma in Risk Management', 'Tech Institute AJ', '2018-01-01', '2018-12-01', 12),

-- Degrees for Candidate 13
('Bachelors in Industrial Engineering', 'University of AK', '2015-09-01', '2019-06-01', 13),
('Masters in Operations Research', 'University of AL', '2019-09-01', '2021-06-01', 13),
('Diploma in Quality Management', 'Tech Institute AM', '2017-01-01', '2017-12-01', 13),

-- Degrees for Candidate 14
('Bachelors in Environmental Science', 'University of AN', '2016-09-01', '2020-06-01', 14),
('Masters in Climate Studies', 'University of AO', '2020-09-01', '2022-06-01', 14),
('Diploma in Renewable Energy', 'Tech Institute AP', '2018-01-01', '2018-12-01', 14),

-- Degrees for Candidate 15
('Bachelors in Forensic Science', 'University of AQ', '2014-09-01', '2018-06-01', 15),
('Masters in Criminology', 'University of AR', '2018-09-01', '2020-06-01', 15),
('Diploma in Criminal Psychology', 'Tech Institute AS', '2017-01-01', '2017-12-01', 15),

-- Degrees for Candidate 16
('Bachelors in Architecture', 'University of AT', '2016-09-01', '2020-06-01', 16),
('Masters in Urban Design', 'University of AU', '2020-09-01', '2022-06-01', 16),
('Diploma in Landscape Architecture', 'Tech Institute AV', '2019-01-01', '2019-12-01', 16),

-- Degrees for Candidate 17
('Bachelors in Mechanical Engineering', 'University of AW', '2015-09-01', '2019-06-01', 17),
('Masters in Aerospace Engineering', 'University of AX', '2019-09-01', '2021-06-01', 17),
('Diploma in Robotics', 'Tech Institute AY', '2018-01-01', '2018-12-01', 17),

-- Degrees for Candidate 18
('Bachelors in Marine Biology', 'University of AZ', '2016-09-01', '2020-06-01', 18),
('Masters in Conservation Science', 'University of BA', '2020-09-01', '2022-06-01', 18),
('Diploma in Aquatic Ecosystems', 'Tech Institute BB', '2019-01-01', '2019-12-01', 18),

-- Degrees for Candidate 19
('Bachelors in Physics', 'University of BC', '2015-09-01', '2019-06-01', 19),
('Masters in Quantum Mechanics', 'University of BD', '2019-09-01', '2021-06-01', 19),
('Diploma in Astro Physics', 'Tech Institute BE', '2017-01-01', '2017-12-01', 19),

-- Degrees for Candidate 20
('Bachelors in Philosophy', 'University of BF', '2016-09-01', '2020-06-01', 20),
('Masters in Ethics', 'University of BG', '2020-09-01', '2022-06-01', 20),
('Diploma in Ancient Thought', 'Tech Institute BH', '2018-01-01', '2018-12-01', 20);

INSERT INTO CERTIFICATION (certification_name, certification_icon)
VALUES
('AWS Certified Solutions Architect', 'aws_architect.png'),
('Cisco Certified Network Associate', 'ccna.png'),
('Microsoft Certified: Azure Fundamentals', 'azure_fundamentals.png'),
('Certified Information Systems Security Professional', 'cissp.png'),
('Certified Ethical Hacker', 'ceh.png'),
('Google Associate Cloud Engineer', 'gce.png'),
('Certified Kubernetes Administrator', 'cka.png'),
('Oracle Certified Java Developer', 'ocjd.png'),
('Red Hat Certified Engineer', 'rhce.png'),
('VMware Certified Professional', 'vcp.png'),
('CompTIA A+', 'comptia_a.png'),
('Certified ScrumMaster', 'csm.png'),
('Certified Data Professional', 'cdp.png'),
('Certified IT Governance Professional', 'citgp.png'),
('GIAC Security Essentials', 'giac.png'),
('Linux Professional Institute Certification', 'lpic.png'),
('Certified Cloud Security Professional', 'ccsp.png'),
('Certified in Risk and Information Systems Control', 'crisc.png'),
('Certified Information Security Manager', 'cism.png'),
('Certified Wireless Network Professional', 'cwnp.png'),
('Certified Information Privacy Professional', 'cipp.png'),
('Microsoft Certified: AI Engineer', 'ai_engineer.png'),
('Google Professional Data Engineer', 'gde.png'),
('Certified Blockchain Developer', 'cbd.png'),
('Certified IoT Specialist', 'cios.png'),
('SAP Certified Technology Associate', 'sap.png'),
('Certified Network Defense Architect', 'cnda.png'),
('IBM Data Science Professional Certificate', 'ibm_ds.png'),
('Apple Certified iOS Technician', 'acios.png'),
('Certified SQL Developer', 'csd.png'),
('Google Android Developer Certification', 'gadc.png'),
('Certified DevOps Engineer', 'cdoe.png'),
('Certified Agile Tester', 'cat.png'),
('Certified Digital Transformation Professional', 'cdtp.png'),
('Certified in the Governance of Enterprise IT', 'cgeit.png'),
('Digital Marketing Certified Associate', 'dmca.png'),
('Certified Business Analysis Professional', 'cbap.png'),
('Certified Artificial Intelligence Practitioner', 'caip.png'),
('Certified Robotics Process Automation Developer', 'crpa.png'),
('Certified Database Administrator', 'cdba.png'),
('Certified Advanced Networking Specialist', 'cans.png'),
('Certified Cybersecurity Compliance Analyst', 'ccca.png'),
('Adobe Certified Expert', 'ace.png'),
('Certified Machine Learning Specialist', 'cmls.png'),
('Certified Advanced System Administrator', 'casa.png'),
('Certified Network Infrastructure Design Professional', 'cnidp.png'),
('Certified Virtualization Professional', 'cvp.png'),
('Certified Game Development Professional', 'cgdp.png'),
('Certified Mobile Application Developer', 'cmad.png'),
('Certified Embedded Systems Professional', 'cesp.png'),
('Certified IT Auditor', 'cita.png'),
('Certified Quantum Computing Developer', 'cqcd.png'),
('Certified Augmented Reality Developer', 'card.png'),
('Certified Virtual Reality Specialist', 'cvrs.png'),
('Certified Advanced Web Developer', 'cawd.png'),
('Certified Cyber Forensics Professional', 'ccfp.png'),
('Certified Malware Analyst', 'cma.png'),
('Certified Internet of Things Designer', 'ciod.png'),
('Certified Blockchain Solution Architect', 'cbsa.png'),
('Certified Video Game Designer', 'cvgd.png'),
('Certified Advanced Network Technician', 'cant.png'),
('Certified Data Analytics Specialist', 'cdas.png'),
('Certified E-commerce Professional', 'cep.png'),
('Certified Advanced Mobile Developer', 'camd.png'),
('Certified Software Test Engineer', 'cste.png'),
('Certified Performance Tester', 'cpt.png'),
('Certified Digital Design Professional', 'cddp.png'),
('Certified Cloud Architect', 'cca.png'),
('Certified Storage Professional', 'csp.png'),
('Certified Big Data Expert', 'cbde.png');

-- Randomized SQL commands for associating certifications with candidates:
INSERT INTO Has_Certification (candidate_id, certification_name) VALUES 
(1, 'AWS Certified Solutions Architect'),
(1, 'Certified Ethical Hacker'),

(2, 'Cisco Certified Network Associate'),
(2, 'Certified Kubernetes Administrator'),

(3, 'Certified in Risk and Information Systems Control'),
(3, 'Certified Wireless Network Professional'),
(3, 'Certified Digital Transformation Professional'),

(4, 'Certified Machine Learning Specialist'),
(4, 'Certified Network Infrastructure Design Professional'),

(5, 'Certified Quantum Computing Developer'),
(5, 'Certified Augmented Reality Developer'),

(6, 'Certified Advanced Web Developer'),

(7, 'Certified Blockchain Solution Architect'),
(7, 'Certified Video Game Designer'),
(7, 'Certified Advanced Network Technician'),

(8, 'Certified Data Analytics Specialist'),

(9, 'Certified Advanced Mobile Developer'),
(9, 'Certified Cloud Architect'),

(10, 'Certified Ethical Hacker'),
(10, 'Certified ScrumMaster'),
(10, 'Certified Data Professional'),

(11, 'Certified IT Governance Professional'),

(12, 'GIAC Security Essentials'),
(12, 'Linux Professional Institute Certification'),

(13, 'Certified Cloud Security Professional'),

(14, 'Certified in Risk and Information Systems Control'),
(14, 'Certified Information Security Manager'),

(15, 'Certified Wireless Network Professional'),
(15, 'Certified Information Privacy Professional'),
(15, 'Microsoft Certified: AI Engineer'),

(16, 'Google Professional Data Engineer'),

(17, 'Certified Blockchain Developer'),
(17, 'SAP Certified Technology Associate'),

(18, 'Certified Network Defense Architect'),
(18, 'IBM Data Science Professional Certificate'),

(19, 'Apple Certified iOS Technician'),
(19, 'Certified SQL Developer'),
(19, 'Google Android Developer Certification'),

(20, 'Certified DevOps Engineer');

INSERT INTO COMPETENCE (competence_name, competence_icon) VALUES
('Project Management', 'project_management.png'),
('Front-End Development', 'frontend_dev.png'),
('Back-End Development', 'backend_dev.png'),
('System Administration', 'sys_admin.png'),
('Artificial Intelligence', 'ai.png'),
('Machine Learning', 'machine_learning.png'),
('Relational Database', 'relational_db.png'),
('NoSQL Databases', 'nosql.png'),
('Cybersecurity', 'cybersecurity.png'),
('iOS Mobile Development', 'ios_dev.png'),
('Android Mobile Development', 'android_dev.png'),
('UI/UX Design', 'uiux_design.png'),
('DevOps', 'devops.png'),
('Continuous Integration', 'ci.png'),
('Cloud Computing', 'cloud_computing.png'),
('Networking & Infrastructure', 'networking.png'),
('Blockchain', 'blockchain.png'),
('Data Analysis', 'data_analysis.png'),
('Big Data', 'big_data.png'),
('Virtual Reality', 'vr.png'),
('Augmented Reality', 'ar.png'),
('E-commerce', 'ecommerce.png'),
('SEO/SEM Marketing', 'seo_sem.png'),
('Game Development', 'game_dev.png'),
('ERP & CRM Systems', 'erp_crm.png'),
('Team Management', 'team_management.png'),
('Business Intelligence', 'bi.png'),
('IoT (Internet of Things)', 'iot.png'),
('Content Management', 'cms.png'),
('Testing & QA', 'testing_qa.png'),
('Automation', 'automation.png'),
('Scripting Languages', 'scripting.png'),
('Virtualization', 'virtualization.png'),
('Infrastructure as Code', 'iac.png'),
('Microservices', 'microservices.png'),
('Docker & Containers', 'docker.png'),
('Kubernetes', 'kubernetes.png'),
('Web APIs', 'web_api.png'),
('System Integration', 'system_integration.png'),
('Configuration Management', 'config_management.png'),
('Performance Optimization', 'performance_optimization.png'),
('Web Sockets', 'web_sockets.png'),
('Graph Databases', 'graph_db.png'),
('Agile Methodologies', 'agile.png'),
('Design Systems', 'design_systems.png'),
('PWA (Progressive Web Apps)', 'pwa.png'),
('Serverless Architecture', 'serverless.png'),
('Digital Marketing', 'digital_marketing.png'),
('Database Optimization', 'database_optimization.png'),
('Database Management', 'database_management.png'),
('Network Management', 'network_management.png'),
('Web Development', 'web_development.png');


INSERT INTO Used_Competence(experience_id, competence_name) VALUES
-- Associations for Candidate 1's experiences
(1, 'Front-End Development'),
(1, 'Back-End Development'),
(1, 'Relational Database'),
(2, 'Team Management'),
(2, 'DevOps'),
(3, 'Front-End Development'),
(3, 'System Administration'),

-- Associations for Candidate 2's experiences
(4, 'Data Analysis'),
(4, 'Big Data'),
(5, 'Business Intelligence'),
(5, 'Data Analysis'),
(6, 'Relational Database'),

-- Associations for Candidate 3's experiences
(7, 'Cloud Computing'),
(7, 'Networking & Infrastructure'),
(8, 'Cybersecurity'),
(9, 'Cloud Computing'),

-- Associations for Candidate 4's experiences
(10, 'UI/UX Design'),
(10, 'Front-End Development'),
(11, 'UI/UX Design'),
(12, 'Web APIs'),

-- Associations for Candidate 5's experiences
(13, 'System Administration'),
(13, 'Networking & Infrastructure'),
(14, 'Team Management'),
(15, 'IoT (Internet of Things)'),

-- Associations for Candidate 6's experiences
(16, 'Relational Database'),
(16, 'Database Optimization'),
(17, 'NoSQL Databases'),
(18, 'Database Management'),

-- Associations for Candidate 7's experiences
(19, 'Networking & Infrastructure'),
(20, 'Network Management'),
(21, 'Cloud Computing'),

-- Associations for Candidate 8's experiences
(22, 'Front-End Development'),
(22, 'Microservices'),
(23, 'Web Development'),
(24, 'Web APIs'),

-- Associations for Candidate 9's experiences
(25, 'Back-End Development'),
(25, 'Microservices'),
(26, 'Serverless Architecture'),
(27, 'System Integration'),

-- Associations for Candidate 10's experiences
(28, 'DevOps'),
(29, 'Continuous Integration'),
(30, 'Serverless Architecture'),

-- Associations for Candidate 11's experiences
(31, 'Testing & QA'),
(31, 'Automation'),
(32, 'Performance Optimization'),
(33, 'Continuous Integration'),

-- Associations for Candidate 12's experiences
(34, 'iOS Mobile Development'),
(34, 'Android Mobile Development'),
(35, 'UI/UX Design'),
(36, 'Front-End Development'),

-- Associations for Candidate 13's experiences
(37, 'Cybersecurity'),
(37, 'IoT (Internet of Things)'),
(38, 'Serverless Architecture'),
(39, 'Network Management'),

-- Associations for Candidate 14's experiences
(40, 'Cloud Computing'),
(40, 'Kubernetes'),
(41, 'Microservices'),
(42, 'Networking & Infrastructure'),

-- Associations for Candidate 15's experiences
(43, 'Data Analysis'),
(43, 'Business Intelligence'),
(44, 'Data Analysis'),
(45, 'Big Data'),

-- Associations for Candidate 16's experiences
(46, 'System Administration'),
(46, 'Configuration Management'),
(47, 'Networking & Infrastructure'),
(48, 'Infrastructure as Code'),

-- Associations for Candidate 17's experiences
(49, 'UI/UX Design'),
(49, 'Front-End Development'),
(50, 'PWA (Progressive Web Apps)'),
(51, 'Design Systems'),

-- Associations for Candidate 18's experiences
(52, 'Testing & QA'),
(53, 'Automation'),
(54, 'Performance Optimization'),

-- Associations for Candidate 19's experiences
(55, 'Machine Learning'),
(56, 'Artificial Intelligence'),
(57, 'Data Analysis'),

-- Associations for Candidate 20's experiences
(58, 'Blockchain'),
(59, 'Cloud Computing'),
(60, 'Serverless Architecture');

INSERT INTO Has_hobby (candidate_id, hobby_name) VALUES
-- Associations for Candidate 1
(1, 'Photography'),
(1, 'Cooking'),

-- Associations for Candidate 2
(2, 'Hiking'),
(2, 'Reading'),

-- Associations for Candidate 3
(3, 'Playing Musical Instruments'),
(3, 'Gardening'),

-- Associations for Candidate 4
(4, 'Astronomy'),
(4, 'Dancing'),
(4, 'Traveling'),

-- Associations for Candidate 5
(5, 'DIY Crafts'),
(5, 'Biking'),

-- Associations for Candidate 6
(6, 'Writing'),
(6, 'Board Games'),
(6, 'Cooking'),

-- Associations for Candidate 7
(7, 'Photography'),
(7, 'Astronomy'),

-- Associations for Candidate 8
(8, 'Hiking'),
(8, 'Painting'),
(8, 'Yoga'),

-- Associations for Candidate 9
(9, 'Traveling'),
(9, 'Biking'),

-- Associations for Candidate 10
(10, 'Photography'),
(10, 'Writing'),
(10, 'Cooking'),

-- Associations for Candidate 11
(11, 'Astronomy'),
(11, 'Reading'),

-- Associations for Candidate 12
(12, 'Playing Musical Instruments'),

-- Associations for Candidate 13
(13, 'Gardening'),
(13, 'DIY Crafts'),

-- Associations for Candidate 14
(14, 'Yoga'),
(14, 'Dancing'),

-- Associations for Candidate 15
(15, 'Biking'),
(15, 'Painting'),
(15, 'Reading'),

-- Associations for Candidate 16
(16, 'Cooking'),
(16, 'Hiking'),

-- Associations for Candidate 17
(17, 'Writing'),
(17, 'Photography'),

-- Associations for Candidate 18
(18, 'DIY Crafts'),
(18, 'Playing Musical Instruments'),
(18, 'Reading'),

-- Associations for Candidate 19
(19, 'Yoga'),

-- Associations for Candidate 20
(20, 'Biking'),
(20, 'Photography');

INSERT INTO TOOL(tool_name, tool_icon) VALUES
('Python', 'python_icon.png'),
('Java', 'java_icon.png'),
('C++', 'cpp_icon.png'),
('JavaScript', 'javascript_icon.png'),
('HTML/CSS', 'html_css_icon.png'),
('SQL', 'sql_icon.png'),
('Ruby', 'ruby_icon.png'),
('Swift', 'swift_icon.png'),
('MATLAB', 'matlab_icon.png'),
('Docker', 'docker_icon.png'),
('Kubernetes', 'kubernetes_icon.png'),
('Git', 'git_icon.png'),
('Jenkins', 'jenkins_icon.png'),
('React', 'react_icon.png'),
('Angular', 'angular_icon.png'),
('Vue.js', 'vue_icon.png'),
('PostgreSQL', 'postgresql_icon.png'),
('MongoDB', 'mongodb_icon.png'),
('Redis', 'redis_icon.png'),
('AWS', 'aws_icon.png'),
('Azure', 'azure_icon.png'),
('GCP', 'gcp_icon.png'),
('Tableau', 'tableau_icon.png'),
('Excel', 'excel_icon.png'),
('R', 'r_icon.png'),
('SAS', 'sas_icon.png'),
('Node.js', 'nodejs_icon.png'),
('TensorFlow', 'tensorflow_icon.png'),
('PyTorch', 'pytorch_icon.png'),
('.NET', 'dotnet_icon.png'),
('Unity', 'unity_icon.png'),
('Unreal Engine', 'unreal_icon.png'),
('Photoshop', 'photoshop_icon.png'),
('Illustrator', 'illustrator_icon.png'),
('Figma', 'figma_icon.png'),
('Android Studio', 'android_studio_icon.png'),
('Xcode', 'xcode_icon.png'),
('Visual Studio Code', 'vscode_icon.png'),
('Eclipse', 'eclipse_icon.png'),
('IntelliJ IDEA', 'intellij_icon.png'),
('Selenium', 'selenium_icon.png'),
('Automated Testing', 'automated_testing_icon.png'),
('VBA', 'vba_icon.png'),
('Microsoft Office', 'microsoft_office_icon.png'),
('Maven', 'maven_icon.png'),
('Gradle', 'gradle_icon.png'),
('Clojure', 'clojure_icon.png'),
('Functional Programming', 'functional_programming_icon.png'),
('Fortran', 'fortran_icon.png'),
('Scientific Computing', 'scientific_computing_icon.png'),
('Cobalt', 'cobalt_icon.png'),
('Legacy Systems', 'legacy_systems_icon.png'),
('Crystal', 'crystal_icon.png'),
('Concurrency', 'concurrency_icon.png'),
('LabVIEW', 'labview_icon.png'),
('Instrument Control', 'instrument_control_icon.png'),
('MapReduce', 'mapreduce_icon.png'),
('Big Data Processing', 'big_data_processing_icon.png'),
('Erlang', 'erlang_icon.png'),
('Distributed Systems', 'distributed_systems_icon.png'),
('Pascal', 'pascal_icon.png'),
('Structured Programming', 'structured_programming_icon.png'),
('Octave', 'octave_icon.png'),
('Numerical Analysis', 'numerical_analysis_icon.png'),
('Puppet', 'puppet_icon.png'),
('Infrastructure Automation', 'infrastructure_automation_icon.png'),
('Chef', 'chef_icon.png'),
('Configuration Management', 'configuration_management_icon.png'),
('Ocaml', 'ocaml_icon.png'),
('Type Inference', 'type_inference_icon.png'),
('MySQL', 'mysql_icon.png'),
('PHP', 'php_icon.png'),
('Laravel', 'laravel_icon.png'),
('C#', 'csharp_icon.png'),
('Golang', 'golang_icon.png'),
('Spring Boot', 'spring_boot_icon.png'),
('Kotlin', 'kotlin_icon.png'),
('PowerBI', 'powerbi_icon.png'),
('SASS', 'sass_icon.png'),
('Bootstrap', 'bootstrap_icon.png'),
('Elixir', 'elixir_icon.png'),
('Phoenix', 'phoenix_icon.png'),
('TypeScript', 'typescript_icon.png'),
('Flutter', 'flutter_icon.png'),
('Dart', 'dart_icon.png'),
('ASP.NET', 'aspnet_icon.png'),
('MSSQL', 'mssql_icon.png'),
('GraphQL', 'graphql_icon.png'),
('Apollo', 'apollo_icon.png'),
('Rust', 'rust_icon.png'),
('Cargo', 'cargo_icon.png'),
('Scala', 'scala_icon.png'),
('Play Framework', 'play_framework_icon.png'),
('InDesign', 'indesign_icon.png'),
('Perl', 'perl_icon.png'),
('Oracle DB', 'oracle_db_icon.png'),
('Webpack', 'webpack_icon.png'),
('Yarn', 'yarn_icon.png'),
('NPM', 'npm_icon.png'),
('Julia', 'julia_icon.png'),
('Elasticsearch', 'elasticsearch_icon.png'),
('Logstash', 'logstash_icon.png'),
('Kibana', 'kibana_icon.png'),
('Nginx', 'nginx_icon.png'),
('Apache', 'apache_icon.png'),
('Hadoop', 'hadoop_icon.png'),
('Spark', 'spark_icon.png'),
('Solidity', 'solidity_icon.png'),
('Ethereum', 'ethereum_icon.png'),
('Bash', 'bash_icon.png'),
('Shell Scripting', 'shell_scripting_icon.png'),
('Groovy', 'groovy_icon.png'),
('Grails', 'grails_icon.png'),
('C', 'c_icon.png'),
('Makefile', 'makefile_icon.png'),
('Postman', 'postman_icon.png'),
('JIRA', 'jira_icon.png'),
('Drupal', 'drupal_icon.png'),
('WordPress', 'wordpress_icon.png'),
('Haskell', 'haskell_icon.png'),
('Stack', 'stack_icon.png'),
('VHDL', 'vhdl_icon.png'),
('Verilog', 'verilog_icon.png'),
('Prolog', 'prolog_icon.png'),
('RabbitMQ', 'rabbitmq_icon.png'),
('ROS', 'ros_icon.png'),
('Robotics', 'robotics_icon.png'),
('Zig', 'zig_icon.png'),
('Embedded Systems', 'embedded_systems_icon.png'),
('Lua', 'lua_icon.png'),
('Game Scripting', 'game_scripting_icon.png'),
('Firebase', 'firebase_icon.png'),
('Django', 'django_icon.png');



INSERT INTO Used_Tool(experience_id, tool_name) VALUES
-- Associations for Experience 1
(1, 'Python'),
(1, 'Java'),
(1, 'SQL'),
(1, 'Docker'),

-- Associations for Experience 2
(2, 'JavaScript'),
(2, 'HTML/CSS'),
(2, 'Node.js'),
(2, 'Git'),

-- Associations for Experience 3
(3, 'Ruby'),
(3, 'Docker'),
(3, 'Kubernetes'),

-- Associations for Experience 4
(4, 'Angular'),
(4, 'TypeScript'),
(4, 'Redis'),

-- Associations for Experience 5
(5, 'AWS'),
(5, 'Java'),
(5, 'MySQL'),

-- Associations for Experience 6
(6, 'Git'),
(6, 'Vue.js'),
(6, 'MongoDB'),
(6, 'Redis'),

-- Associations for Experience 7
(7, 'Kubernetes'),
(7, 'Docker'),
(7, 'Jenkins'),
(7, 'Python'),

-- Associations for Experience 8
(8, 'PHP'),
(8, 'Laravel'),
(8, 'MySQL'),

-- Associations for Experience 9
(9, 'TensorFlow'),
(9, 'Python'),
(9, 'PyTorch'),

-- Associations for Experience 10
(10, 'Unity'),
(10, 'C#'),

-- Associations for Experience 11
(11, 'Golang'),
(11, 'Docker'),
(11, 'Redis'),

-- Associations for Experience 12
(12, 'Spring Boot'),
(12, 'Java'),
(12, 'Kotlin'),

-- Associations for Experience 13
(13, 'R'),
(13, 'PowerBI'),
(13, 'Tableau'),

-- Associations for Experience 14
(14, 'SASS'),
(14, 'Bootstrap'),
(14, 'JavaScript'),

-- Associations for Experience 15
(15, 'Elixir'),
(15, 'Phoenix'),
(15, 'Redis'),

-- Associations for Experience 16
(16, 'TypeScript'),
(16, 'React'),
(16, 'HTML/CSS'),

-- Associations for Experience 17
(17, 'MATLAB'),
(17, 'C++'),

-- Associations for Experience 18
(18, 'Flutter'),
(18, 'Dart'),
(18, 'Firebase'),

-- Associations for Experience 19
(19, 'ASP.NET'),
(19, 'C#'),
(19, 'MSSQL'),

-- Associations for Experience 20
(20, 'GraphQL'),
(20, 'Apollo'),
(20, 'React'),

-- Associations for Experience 21
(21, 'Rust'),
(21, 'Cargo'),
(21, 'Git'),

-- Associations for Experience 22
(22, 'Swift'),
(22, 'Xcode'),

-- Associations for Experience 23
(23, 'Scala'),
(23, 'Play Framework'),
(23, 'Java'),

-- Associations for Experience 24
(24, 'Photoshop'),
(24, 'InDesign'),
(24, 'Illustrator'),

-- Associations for Experience 25
(25, 'Perl'),
(25, 'Oracle DB'),
(25, 'SQL'),

-- Associations for Experience 26
(26, 'Webpack'),
(26, 'Yarn'),
(26, 'NPM'),
(26, 'Vue.js'),

-- Associations for Experience 27
(27, 'Illustrator'),
(27, 'Figma'),
(27, 'Photoshop'),

-- Associations for Experience 28
(28, 'Julia'),
(28, 'Python'),
(28, 'PyTorch'),

-- Associations for Experience 29
(29, 'Elasticsearch'),
(29, 'Logstash'),
(29, 'Kibana'),

-- Associations for Experience 30
(30, 'Nginx'),
(30, 'Apache'),
(30, 'Docker'),

-- Associations for Experience 31
(31, 'Hadoop'),
(31, 'Spark'),
(31, 'Java'),

-- Associations for Experience 32
(32, 'Solidity'),
(32, 'Ethereum'),

-- Associations for Experience 33
(33, 'Tableau'),
(33, 'Excel'),
(33, 'Python'),

-- Associations for Experience 34
(34, 'Bash'),
(34, 'Shell Scripting'),
(34, 'Python'),

-- Associations for Experience 35
(35, 'Groovy'),
(35, 'Grails'),
(35, 'Java'),

-- Associations for Experience 36
(36, 'C'),
(36, 'Makefile'),
(36, 'Python'),

-- Associations for Experience 37
(37, 'Postman'),
(37, 'JIRA'),
(37, 'Git'),

-- Associations for Experience 38
(38, 'Drupal'),
(38, 'WordPress'),
(38, 'PHP'),

-- Associations for Experience 39
(39, 'Haskell'),
(39, 'Stack'),
(39, 'Python'),

-- Associations for Experience 40
(40, 'VHDL'),
(40, 'Verilog'),

-- Associations for Experience 41
(41, 'Prolog'),
(41, 'RabbitMQ'),
(41, 'Java'),

-- Associations for Experience 42
(42, 'ROS'),
(42, 'Robotics'),
(42, 'Python'),

-- Associations for Experience 43
(43, 'Zig'),
(43, 'Embedded Systems'),
(43, 'C++'),

-- Associations for Experience 44
(44, 'Lua'),
(44, 'Game Scripting'),
(44, 'C++'),

-- Associations for Experience 45
(45, 'Python'),
(45, 'Django'),
(45, 'PostgreSQL'),

-- Associations for Experience 46
(46, 'Selenium'),
(46, 'Automated Testing'),
(46, 'Java'),

-- Associations for Experience 47
(47, 'VBA'),
(47, 'Microsoft Office'),
(47, 'Excel'),

-- Associations for Experience 48
(48, 'Maven'),
(48, 'Gradle'),
(48, 'Java'),

-- Associations for Experience 49
(49, 'Clojure'),
(49, 'Functional Programming'),
(49, 'Java'),

-- Associations for Experience 50
(50, 'Fortran'),
(50, 'Scientific Computing'),
(50, 'MATLAB'),

-- Associations for Experience 51
(51, 'Cobalt'),
(51, 'Legacy Systems'),

-- Associations for Experience 52
(52, 'Crystal'),
(52, 'Concurrency'),
(52, 'Python'),

-- Associations for Experience 53
(53, 'LabVIEW'),
(53, 'Instrument Control'),
(53, 'MATLAB'),

-- Associations for Experience 54
(54, 'MapReduce'),
(54, 'Big Data Processing'),
(54, 'Java'),

-- Associations for Experience 55
(55, 'Erlang'),
(55, 'Distributed Systems'),
(55, 'Python'),

-- Associations for Experience 56
(56, 'Pascal'),
(56, 'Structured Programming'),
(56, 'C++'),

-- Associations for Experience 57
(57, 'Octave'),
(57, 'Numerical Analysis'),
(57, 'MATLAB'),

-- Associations for Experience 58
(58, 'Puppet'),
(58, 'Infrastructure Automation'),
(58, 'Docker'),

-- Associations for Experience 59
(59, 'Chef'),
(59, 'Configuration Management'),
(59, 'Python'),

-- Associations for Experience 60
(60, 'Ocaml'),
(60, 'Type Inference');

INSERT INTO LANGUAGE (language_name) VALUES
('English'),
('Spanish'),
('French'),
('German'),
('Chinese'),
('Russian'),
('Japanese'),
('Korean'),
('Arabic'),
('Hindi'),
('Italian'),
('Portuguese'),
('Dutch'),
('Swedish'),
('Danish'),
('Norwegian'),
('Finnish'),
('Turkish'),
('Greek'),
('Mandarin'),
('Hebrew');

INSERT INTO Language_Level (language_level) VALUES
('Beginner'),
('Elementary'),
('Pre-Intermediate'),
('Intermediate'),
('Upper Intermediate'),
('Advanced'),
('Proficient'),
('Native Speaker');

INSERT INTO Speaks_Language (candidate_id, language_name, language_level) VALUES
(1, 'English', 'Native Speaker'),
(1, 'Spanish', 'Intermediate'),
(2, 'French', 'Beginner'),
(2, 'English', 'Upper Intermediate'),
(3, 'German', 'Advanced'),
(3, 'Spanish', 'Pre-Intermediate'),
(4, 'English', 'Native Speaker'),
(5, 'Portuguese', 'Intermediate'),
(6, 'Italian', 'Beginner'),
(6, 'Spanish', 'Advanced'),
(7, 'Japanese', 'Elementary'),
(8, 'English', 'Upper Intermediate'),
(8, 'Russian', 'Beginner'),
(9, 'Mandarin', 'Advanced'),
(10, 'English', 'Native Speaker'),
(11, 'Spanish', 'Intermediate'),
(11, 'German', 'Beginner'),
(12, 'French', 'Upper Intermediate'),
(12, 'Japanese', 'Pre-Intermediate'),
(13, 'English', 'Native Speaker'),
(14, 'Korean', 'Elementary'),
(14, 'Spanish', 'Intermediate'),
(15, 'English', 'Advanced'),
(16, 'Arabic', 'Elementary'),
(17, 'Spanish', 'Upper Intermediate'),
(17, 'English', 'Native Speaker'),
(18, 'Portuguese', 'Beginner'),
(19, 'Hindi', 'Intermediate'),
(19, 'Spanish', 'Advanced'),
(20, 'English', 'Native Speaker'),
(20, 'Italian', 'Elementary');
