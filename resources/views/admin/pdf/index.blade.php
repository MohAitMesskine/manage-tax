<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="generator" content="Aspose.Words for .NET 22.3.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        body {
            widows: 0;
            orphans: 0;
            font-family: Calibri;
            font-size: 11pt
        }

        p {
            margin: 0pt
        }

        table {
            margin-top: 0pt;
            margin-bottom: 0pt
        }

        .BodyText {
            margin: 0pt;
            text-align: left;
            line-height: normal;
            widows: 0;
            orphans: 0;
            font-family: Calibri;
            font-size: 9.5pt
        }

        .Heading1 {
            margin: 0pt 0pt 0pt 0.35pt;
            text-align: left;
            line-height: normal;
            widows: 0;
            orphans: 0;
            font-family: Calibri;
            font-size: 9.5pt;
            font-weight: bold
        }

        .ListParagraph {
            margin: 0pt;
            text-align: left;
            line-height: normal;
            widows: 0;
            orphans: 0;
            font-family: Calibri;
            font-size: 11pt
        }

        .TableParagraph {
            margin: 8.9pt 0pt 0pt;
            text-align: right;
            line-height: normal;
            widows: 0;
            orphans: 0;
            font-family: 'Arial MT';
            font-size: 11pt
        }

        .Title {
            margin: 0pt 173.1pt 0pt 209.45pt;
            text-align: center;
            line-height: normal;
            widows: 0;
            orphans: 0;
            font-family: Calibri;
            font-size: 11.5pt;
            font-weight: bold;
            text-decoration: underline
        }

        .TableNormal {}

    </style>
</head>

<body onload="window.print()">
    <div class="container pt-3">
        <div class="row">
            <div class="col">
                <b class="font-weight-lighte">ROYAUME DU MAROC <br>
                    MINISTERE DE L'INTERIEUR <br>
                    PREFECTURE INZEGANE AIT MELLOUL <br>
                    COMMUNE AIT MELLOUL <br>
                    SERVICE D'ASSIETTE <br>
                </b></div>

            <div class="col text-end">Raison sociale : <b> {{$redevable->nom}} </b> <br>
                Adresse : <b> {{$redevable->adress}} </b> <br>
                Autorisation : <b> {{ $redevable->numero}} </b> <br>
                N° lot : <b> {{$payement->numerolot}} </b> <br>
            </div>
        </div>

        <div class="row" style="padding: 30px;">
            <div class="col" style="padding: 30px;">
                <b class="font-weight-lighte">JOURS DE RECETTES: <br></b>
                <p> Tous les jours non fériés <br>
                    de 9h00 à 15h30 </p>
            </div>

            <div class="col text-end"> <b class="font-weight-lighte">TAXES MUNICIPALES : <br></b>
                <p> Exercice :{{$autorisation->annee}} <br>

                    Article :{{$redevable->article}} </p>
            </div>


            <div>
                <h4 class="text-center"> <b>N.B :</b>Prière de rapporter cet avis au régisseur Municipal en venant payer
                </h4>
                <p class="BodyText" style="font-size:10pt">
                    <span style="-aw-import:ignore">&#xa0;</span>
                    <p class="text-start">Article : {{$redevable->adress}} du Rôle N° : 12 Date de
                        duplication:{{$payement->date}}
                        .</p>
                </p>
            </div>


            <strong class="text-center p-2" style="font-size:20pt">Avis</strong>

            <p class="BodyText p-2 fw-light" style="font-size:12pt">En exécution de l'Arrêté n° 03 en date du 9 mai 2008
                du Président du Conseil Municipal
                d'Ait Melloul vous êtes invité à payer sans retard, afin d'éviter toutes poursuites
                la somme de:  {{$a+$b+$c+$d +$a+$b+$c+$d+$a+$b+$c+$d+$a+$b+$c+$d}} DIRHAMS /.
            </p>
            <p class="text-start p-4" style="font-size:10pt">
                à laquelle vous êtes imposé pour les motifs ci-après
            </p>
            <strong class="text-center"> NATURE ET DECOMPTE DE LA TAXE</strong>
            <p class="BodyText p-2 "> La redevance d'Occupation Temporaire du Domaine Public Communal par un usage
                Commercial Industriel ou Professionnel (SOUK MUNICIPAL ARGANA 1ér TRANCHE)</p>

        </div>



        <table cellspacing="0" cellpadding="0" class="TableNormal"
            style="margin-left:53.9pt; -aw-border-insideh:1pt single #000000; -aw-border-insidev:1pt single #000000; border-collapse:collapse">
            <tr style="height:16.15pt">
                <td style="width:53pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph"
                        style="margin-top:6.25pt; margin-left:20.75pt; text-align:left; line-height:8.85pt">
                        <span style="font-family:Arial; font-size:8.5pt; font-weight:bold">Année</span>
                    </p>
                </td>
                <td style="width:83pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-top:6.25pt; margin-right:5.35pt; line-height:8.85pt">
                        <span
                            style="font-family:Arial; font-size:8.5pt; font-weight:bold; letter-spacing:-0.1pt">1ère</span>
                        <span style="font-family:Arial; font-size:8.5pt; font-weight:bold; letter-spacing:-0.5pt">
                        </span>
                        <span
                            style="font-family:Arial; font-size:8.5pt; font-weight:bold; letter-spacing:-0.1pt">Trimestre</span>
                    </p>
                </td>
                <td style="width:89pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph"
                        style="margin-top:6.25pt; margin-left:19.3pt; text-align:left; line-height:8.85pt">
                        <span style="font-family:Arial; font-size:8.5pt; font-weight:bold">2ème</span>
                        <span style="font-family:Arial; font-size:8.5pt; font-weight:bold; letter-spacing:0.35pt">
                        </span>


                        <span style="font-family:Arial; font-size:8.5pt; font-weight:bold">Trimestre
                        </span>
                    </p>
                </td>
                <td style="width:95pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-top:6.25pt; margin-right:11.35pt; line-height:8.85pt">
                        <span style="font-family:Arial; font-size:8.5pt; font-weight:bold">3ème
                        </span><span
                            style="font-family:Arial; font-size:8.5pt; font-weight:bold; letter-spacing:0.35pt">
                        </span>
                        <span style="font-family:Arial; font-size:8.5pt; font-weight:bold">Trimestre</span></p>
                </td>
                <td style="width:83pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-top:6.25pt; margin-right:5.35pt; line-height:8.85pt">
                        <span style="font-family:Arial; font-size:8.5pt; font-weight:bold">4ème</span>
                        <span style="font-family:Arial; font-size:8.5pt; font-weight:bold; letter-spacing:0.35pt">
                        </span>
                        <span style="font-family:Arial; font-size:8.5pt; font-weight:bold">Trimestre</span>
                    </p>
                </td>
                <td style="width:65pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-top:6.25pt; margin-right:5.35pt; line-height:8.85pt">
                        <span style="font-family:Arial; font-size:8.5pt; font-weight:bold">Total</span>
                    </p>
                </td>
            </tr>

            <tr style="height:18.05pt">
                <td style="width:53pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph"
                        style="margin-top:6.5pt; margin-left:17.45pt; text-align:left; font-size:9pt">
                        <span>{{date("Y")-3}}</span></p>
                </td>
                <td style="width:83pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-top:6.5pt; margin-right:10.7pt; font-size:9pt">
                        <span>{{ $a}}Dhs</span></p>
                </td>
                <td style="width:89pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-top:6.5pt; margin-right:11.45pt; font-size:9pt">
                        <span>{{ $b}}Dhs</span></p>
                </td>
                <td style="width:95pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-top:6.5pt; margin-right:11.5pt; font-size:9pt">
                        <span>{{ $c}}Dhs</span></p>
                </td>
                <td style="width:83pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-top:6.5pt; margin-right:5.5pt; font-size:9pt">
                        <span>{{$d}}Dhs</span></p>
                </td>
                <td style="width:65pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-top:6.5pt; font-size:9pt">
                        <span>{{$a+$b+$c+$d}}DHs</span>
                    </p>
                </td>
            </tr>
            <tr style="height:20.5pt">
                <td style="width:53pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-left:17.45pt; text-align:left; font-size:9pt">
                        <span>{{date("Y")-2}}</span>
                    </p>
                </td>
                <td style="width:83pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-right:10.75pt; font-size:9pt">
                        <span>{{$a}}Dhs</span>
                    </p>
                </td>
                <td style="width:89pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-left:49.95pt; text-align:left; font-size:9pt">
                        <span>{{$b}}Dhs</span>
                    </p>
                </td>
                <td style="width:95pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-right:11.5pt; font-size:9pt">
                        <span>{{$c}}Dhs</span>
                    </p>
                </td>
                <td style="width:83pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-right:5.5pt; font-size:9pt">
                        <span>{{ $d}}Dhs</span>
                    </p>
                </td>
                <td style="width:65pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="font-size:9pt">
                        <span>{{$a+$b+$c+$d}}DHs</span>
                    </p>
                </td>
            </tr>
            <tr style="height:20.5pt">
                <td style="width:53pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-left:17.45pt; text-align:left; font-size:9pt">
                        <span>{{date("Y")-1}}</span></p>
                </td>
                <td style="width:83pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-right:10.75pt; font-size:9pt">
                        <span>{{  $a}}Dhs
                </td>
                <td style="width:89pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-left:49.95pt; text-align:left; font-size:9pt">
                        <span>{{ $b}}Dhs</span>
                    </p>
                </td>
                <td style="width:95pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-right:11.5pt; font-size:9pt">
                        <span>{{  $c}}Dhs</span>
                    </p>
                </td>
                <td style="width:83pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-right:5.5pt; font-size:9pt">
                        <span>{{  $d}}Dhs</span>
                    </p>
                </td>
                <td style="width:65pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="font-size:9pt">
                        <span>{{$a+$b+$c+$d}}DHs</span>
                    </p>
                </td>
            </tr>
            <tr style="height:20.5pt">
                <td style="width:53pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-left:17.45pt; text-align:left; font-size:9pt">
                        <span>{{date("Y")}}</span></p>
                </td>
                <td style="width:83pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-right:10.75pt; font-size:9pt">
                        <span>{{  $a}}Dhs
                        </span>
                    </p>
                </td>
                <td style="width:89pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-left:49.95pt; text-align:left; font-size:9pt">
                        <span>{{  $b }}Dhs</span>
                    </p>
                </td>
                <td style="width:95pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-right:11.5pt; font-size:9pt">
                        <span>{{  $c}}Dhs</span> </p>
                </td>
                <td style="width:83pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-right:5.5pt; font-size:9pt">
                        <span>{{  $d}}Dhs</span>
                    </p>
                </td>
                <td style="width:65pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="font-size:9pt">
                        <span>{{$a+$b+$c+$d}}DHs</span>
                    </p>
                </td>
            </tr>
            <tr style="height:14.5pt">
                <td colspan="5"
                    style="width:407.5pt; border-top-style:solid; border-top-width:1pt; border-right-style:solid; border-right-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-top:3.65pt; margin-right:27.75pt; font-size:8.5pt">
                        <span style="font-family:Arial; font-weight:bold">Total
                        </span>
                        <span style="font-family:Arial; font-weight:bold; letter-spacing:-0.6pt">
                        </span>
                        <span style="font-family:Arial; font-weight:bold">:</span>
                    </p>
                </td>
                <td style="width:65pt; border-style:solid; border-width:1pt; vertical-align:top">
                    <p class="TableParagraph" style="margin-top:3.65pt; margin-right:0.1pt; font-size:8.5pt">
                        <span style="font-family:Arial; font-weight:bold; letter-spacing:-0.05pt">
                            {{$a+$b+$c+$d +$a+$b+$c+$d+$a+$b+$c+$d+$a+$b+$c+$d}}
                        </span>
                        <span style="font-family:Arial; font-weight:bold; letter-spacing:-0.45pt">
                        </span>
                        <span style="font-family:Arial; font-weight:bold; letter-spacing:-0.05pt">DH</span>
                    </p>
                </td>
            </tr>
        </table>
        <p class="BodyText" style="font-size:10pt">
            <span style="-aw-import:ignore">&#xa0;</span>
        </p>
        <p class="BodyText" style="font-size:10pt">
            <span style="-aw-import:ignore">&#xa0;</span></p>
        <p class="BodyText" style="margin-top:0.05pt">
            <span style="-aw-import:ignore">&#xa0;</span>
        </p>
        <p class="Heading1" style="margin-top:3.35pt; margin-left:30.15pt">
            <span style="text-decoration:underline">L'ORDONNATEUR:</span>
        </p>
    </div>
    </div>

</body>

</html>
