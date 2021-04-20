@extends('layout')
@section('content')
    <main>
    <h1>Mijn Dashboard</h1>
        <span>
        <h2>Studiemonitor met DB</h2>
            <label for="NBSA">NBSA grens = 45/45</label>
            <progress id="NBSA" value="45" max="45"></progress>
            <table>
                <tr>
                    <th>Blok</th>
                    <th>Cursus</th>
                    <th>Toets</th>
                    <th>Weging</th>
                    <th>EC</th>
                    <th>Cijfer</th>
                    <th></th>
                </tr>
                @foreach ($assignments as $assignment)
                    <tr>
                        <td>{{$assignment->blok}}</td>
                        <td>{{$assignment->cursus}}</td>
                        <td>{{$assignment->toets}}</td>
                        <td>{{$assignment->weging}}%</td>
                        <td>{{$assignment->ec}}</td>
                        <td>{{$assignment->cijfer}}</td>
                        <td><a href="{{route('assignments.edit', $assignment)}}"><button>Edit</button></a></td>
                        <td>
                            <form method="POST" action="/assignments/{{$assignment->id}}">
                                @csrf
                                @method("DELETE")
                                <button>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
                <a href="/assignments/create">
                    <button>Add</button>
                </a>
    </span>
    <span>
    <h2>Studiemonitor in HTML</h2>
<label for="NBSA">NBSA grens = 45/45</label>
    <progress id="NBSA" value="45" max="45"></progress>
    <table>
        <tr>
            <th></th>
            <th>Cursus</th>
            <th>Toets</th>
            <th>Weging</th>
            <th>EC</th>
            <th>Cijfer</th>
        </tr>
        <tr>
            <td style="border-bottom-style: hidden">Blok 1</td>
            <td>Opleidings- en beroepsoriëntatie</td>
            <td>Eindgesprek</td>
            <td>100%</td>
            <td>2,5</td>
            <td style="background-color: rgb(8, 185, 8)">Voorbeeld voldoende 8,5</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Computer Science basics</td>
            <td>Theorietentamen</td>
            <td>100%</td>
            <td>7,5</td>
            <td style="background-color:rgb(184, 0, 0)">Voorbeeld onvoldoende 6,8</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden"></td>
            <td>Programming basics</td>
            <td>Casustoets</td>
            <td>100%</td>
            <td>5</td>
            <td>7</td>
        </tr>
        <tr>
            <td style="border-bottom-style: hidden">Blok 2</td>
            <td>Professionals skills 1</td>
            <td>Verslag</td>
            <td>100%</td>
            <td>2,5</td>
            <td>6,7</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Hogeschooltaal toets</td>
            <td></td>
            <td>0%</td>
            <td></td>
            <td>8,6</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>HZ Personality 1</td>
            <td>Portfolio</td>
            <td>100%</td>
            <td>2,5</td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Object-oriented Programming</td>
            <td>Casustoets</td>
            <td>50%</td>
            <td>5</td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden"></td>
            <td>Groepsproject</td>
            <td></td>
            <td>50%</td>
            <td>5</td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-bottom-style: hidden">Blok 3</td>
            <td>Professionals skills 2</td>
            <td>Agile functioneren</td>
            <td>50%</td>
            <td>2,5</td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Engels opdrachten</td>
            <td></td>
            <td>25%</td>
            <td></td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Engels werkstuk</td>
            <td></td>
            <td>25%</td>
            <td></td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Professionele werkplek</td>
            <td>Eindgesprek</td>
            <td>100%</td>
            <td>5</td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Framework development 1</td>
            <td>Casustoets</td>
            <td>100%</td>
            <td>5</td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Framework project 1</td>
            <td>Requirementverslag+Projectresultaat</td>
            <td>50%</td>
            <td>5</td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden"></td>
            <td>Projectresultaat</td>
            <td></td>
            <td>50%</td>
            <td></td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-bottom-style: hidden">Blok 4</td>
            <td>Professionals skills 3</td>
            <td>Agile functioneren</td>
            <td>50%</td>
            <td>2,5</td>
            <td>#</td>
        </tr>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Engels opdrachten</td>
            <td></td>
            <td>25%</td>
            <td></td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Engels werkstuk</td>
            <td></td>
            <td>25%</td>
            <td></td>
            <td>#</td>
        </tr>
        <tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>IT Personality 1</td>
            <td>Eindgesprek</td>
            <td>100%</td>
            <td>2,5</td>
            <td>#</td>
        </tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Framework development 2</td>
            <td>Eindgesprek</td>
            <td>100%</td>
            <td>5</td>
            <td>#</td>
        </tr>
        <tr>
            <td style="border-top-style: hidden; border-bottom-style: hidden"></td>
            <td>Framework project 2</td>
            <td>Code reviews</td>
            <td>50%</td>
            <td>5</td>
            <td>#</td>
        <tr>
            <td style="border-top-style: hidden"></td>
            <td>Projectresultaat</td>
            <td></td>
            <td>50%</td>
            <td></td>
            <td>#</td>
        </tr>
    </table>
    </span>
    <span>
        <h2>Studiewijzer</h2>
            <ul id="studiewijzer">
                <li id="studie"><a href="https://hz.nl/uploads/documents/Regelingen/OERS/OER-HZ-2019-2020-Ba.pdf" target="_blank">Onderwijs en Examenregelement (OER)</a></li>
                <li id="studie"><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2018-2019/9.-HBO-ICT-vt-Uitvoeringsregeling-HZ-2018%E2%80%932019-V02.pdf" target="_blank">Uitvoeringsregeling (UR)</a></li>
                <li id="studie"><a href="https://learn.hz.nl/my/" target="_blank">Learn.hz</a></li>
                <li id="studie"><a href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" target="_blank">Teams</a></li>
                <li id="studie"><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">MyHZ - Studievoortgang</a></li>
                <li id="studie"><a href="https://github.com/hz-hbo-ict" target="_blank">Github HZ</a></li>
            </ul>
        </span>
    </main>
@endsection
