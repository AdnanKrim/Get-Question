<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                            <table class="table table-bordered mb-0">
                                <thead class="bg-orange">
                                <tr class="text-light">
                                    <th>#</th>
                                    <th >Question</th>
                                    <th >Solution</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($ques as $question)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$question['Pid']}}</td>
                                        <td>{{$question['Vid']}}</td>

                
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
</body>
</html>