<?php
class Languages{
function getPageLanguage($page){
$data = [
'home' => [
    'ptBR' => ['title' => 'Teste', 'content' => 'Minha Home'],
    'enUS' => ['title' => 'Test', 'content' => 'My Home']
]
];

if(isset($data[$page])){
    return $data[$page]['ptBR'];
}
 
}



 

}