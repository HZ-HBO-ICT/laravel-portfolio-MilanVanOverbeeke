@extends('layout')

@section('content')

<table>
    <tr>
        <th>Quartile</th>
        <th>Course</th>
        <th>Ec</th>
        <th>Exam</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td rowspan="3">1</td>
        <td>Programme and Career Orientation</td>
        <td>2.5</td>
        <td>Assessment</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="1">Computer Science Basics</td>
        <td rowspan="1">5</td>
        <td>Written exam</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Programming Basics</td>
        <td>5</td>
        <td>Case study</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="2">2</td>
        <td rowspan="2">Object Oriented Programming</td>
        <td rowspan="2">10</td>
        <td>case study</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Project</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="4">3</td>
        <td>Framework Development 1</td>
        <td>5</td>
        <td>Case study</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="3">Framework Project 1</td>
        <td rowspan="3">7.5</td>
        <td>project</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Assessment</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Report</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="3">4</td>
        <td rowspan="3">Framework Project 2</td>
        <td rowspan="3">10</td>
        <td>Portfolio</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Project</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Assessment</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Entire year</td>
        <td>Course</td>
        <td>12,5</td>
        <td>Portfolio</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="2">Ooit</td>
        <td>Personality 1</td>
        <td>1.25</td>
        <td></td>
        <td>-</td>
    </tr>
    <tr>
        <td>Personality 2</td>
        <td>1,25</td>
        <td></td>
        <td>-</td>
    </tr>
</table>
<p>
    <label for="file">minimale studiepunten: 45</label>
    <progress id="file" value="30" max="45"></progress>
</p>
<p>
    <label for="file1">maximale studiepunten: 60</label>
    <progress id="file1" value="30" max="60"></progress>
</p>
</body>
</html>
@endsection
