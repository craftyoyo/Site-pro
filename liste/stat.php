<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "n4Drm5jVJMpLV3g", "stats");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$bdd = $_GET['bdd'];
$loc = $_GET['loc'];
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$prix = mysqli_real_escape_string($link, $_REQUEST['prix']);

// Attempt insert query execution
$sql = "INSERT INTO public (`ID`, `Respondent`, `MainBranch`, `Hobbyist`, `OpenSourcer`, `OpenSource`, `Employment`, `Country`, `Student`, `EdLevel`, `UndergradMajor`, `EduOther`, `OrgSize`, `DevType`, `YearsCode`, `Age1stCode`, `YearsCodePro`, `CareerSat`, `JobSat`, `MgrIdiot`, `MgrMoney`, `MgrWant`, `JobSeek`, `LastHireDate`, `LastInt`, `FizzBuzz`, `JobFactors`, `ResumeUpdate`, `CurrencySymbol`, `CurrencyDesc`, `CompTotal`, `CompFreq`, `ConvertedComp`, `WorkWeekHrs`, `WorkPlan`, `WorkChallenge`, `WorkRemote`, `WorkLoc`, `ImpSyn`, `CodeRev`, `CodeRevHrs`, `UnitTests`, `PurchaseHow`, `PurchaseWhat`, `LanguageWorkedWith`, `LanguageDesireNextYear`, `DatabaseWorkedWith`, `DatabaseDesireNextYear`, `PlatformWorkedWith`, `PlatformDesireNextYear`, `WebFrameWorkedWith`, `WebFrameDesireNextYear`, `MiscTechWorkedWith`, `MiscTechDesireNextYear`, `DevEnviron`, `OpSys`, `Containers`, `BlockchainOrg`, `BlockchainIs`, `BetterLife`, `ITperson`, `OffOn`, `SocialMedia`, `Extraversion`, `ScreenName`, `SOVisit1st`, `SOVisitFreq`, `SOVisitTo`, `SOFindAnswer`, `SOTimeSaved`, `SOHowMuchTime`, `SOAccount`, `SOPartFreq`, `SOJobs`, `EntTeams`, `SOComm`, `WelcomeChange`, `SONewContent`, `Age`, `Gender`, `Trans`, `Sexuality`, `Ethnicity`, `Dependents`, `SurveyLength`, `SurveyEase`) VALUES ('1', 'I am a student who is learning to code', 'Yes', 'Never', 'The quality of OSS and closed source software is about the same', '"Not employed', ' and not looking for work"', 'United Kingdom', 'No', 'Primary/elementary school', 'NA', '"Taught yourself a new language', ' framework', ' or tool without taking a formal course"', 'NA', 'NA', '4', '10', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'HTML/CSS--Java--JavaScript--Python', 'C--C++--C#--Go--HTML/CSS--Java--JavaScript--Python--SQL', 'SQLite', 'MySQL', 'MacOS--Windows', 'Android--Arduino--Windows', 'Django--Flask', 'Flask--jQuery', 'Node.js', 'Node.js', 'IntelliJ--Notepad++--PyCharm', 'Windows', 'I do not use containers', 'NA', 'NA', 'Yes', '"Fortunately', ' someone else has that title"', 'Yes', 'Twitter', 'Online', 'Username', '2017', 'A few times per month or weekly', 'Find answers to specific questions--Learn how to do things I didn’t necessarily look for', '3-5 times per week', 'Stack Overflow was much faster', '31-60 minutes', 'No', 'NA', '"No', ' I didn t know that Stack Overflow had a job board"', '"No', ' and I don t know what those are"', 'Neutral', 'Just as welcome now as I felt last year', 'Tech articles written by other developers--Industry news about technologies you re interested in--Courses on technologies you re interested in', '14', 'Man', 'No', 'Straight / Heterosexual', 'NA', 'No', 'Appropriate in length', 'Neither easy nor difficult ')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
//header("Location: $loc");
?>
