# SAS-Project
Project source for CalU Strike a Spark Conference 2019.

*This project is a functional proof-of-concept, laying the groundwork for future SAS web app groups; as such, it has little security.*

[Kanban Board](https://trello.com/b/VA8yieML/sas-project) used to track tasks

# Goal
The goal of this project was to facilitate collection & conclusion of scores from students' posters. Many manhours would be spent tallying and drafting results from the results; with this program, results would be made in seconds.

Judges would:
1. Sign in with a unique key assigned to them,
2. Select which poster they were judging, 
3. Select numeric scores from pre-determined ranges, as well as any comments,
4. Choose a submission action: 
   - Submit (Cannot be modified after) & Continue
   - Save (Scores can be re-loaded and revised at a later time) & Continue
5. Log out

# Approach:
Myself and five CalU peers took on the project. We spent at least 50 hours outside of class to tackle this project from the ground up; what technologies we could use, what requirements we needed to meet, what design we would take for the entire app, etc.

After consulting needs of the project and the school's IT department, we ended up with the following:
- Files would be hosted on the school's web server
- PHP server w/ Oracle database for scores
- Javascript & HTML front-end

None of us had strong interaction with any of these technologies, so it was mostly through sheer will and good teamwork that we got everything functioning.

I regularly used paint to create primitive diagrams for page navigation:
![Here:](https://i.imgur.com/UmMpVzT.png)

# Challenges
- There was little to no direction given to us as for the design of the project
- The previous group who tried this used Django; because the school wouldn't install Django for them, we were left with python server code that ultimately was binned
- Between classes and the 3 months assigned for the project, time was very cramped
- Because we chose to give pre-assigned IDs to the judges, they had to type out confusing ID strings
- The app was declared as "optional" by the event coordinator; because of this, calculations were not representative of all scores (as some were on paper, but not submitted)

# Results
There were successes with the event; the most success was proof that with revision, this could be a consistent approach to SAS scoring. 

