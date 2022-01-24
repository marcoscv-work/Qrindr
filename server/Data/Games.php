<?php

$games[] = [
    'configId'   => 0,
    'configName' => 'Quake Champions - Timelimit Duel (QPL S2:S1 - Best of 3)',
    'configFile' => 'QuakeChampions_TimelimitDuel_QPL_S2S1_BO3',
    'order'      => 2,
];

$games[] = [
    'configId'   => 1,
    'configName' => 'Quake Champions - Timelimit Duel (QPL S2:S1 - Best of 5)',
    'configFile' => 'QuakeChampions_TimelimitDuel_QPL_S2S1_BO5',
    'order'      => 3,
];

$games[] = [
    'configId'   => 20,
    'configName' => 'Quake Champions - 2V2 TDM (Best of 1)',
    'configFile' => 'QuakeChampions_2V2TDM_BO1',
    'order'      => 4,
];

$games[] = [
    'configId'   => 2,
    'configName' => 'Quake Champions - 2V2 TDM (Best of 3)',
    'configFile' => 'QuakeChampions_2V2TDM_BO3',
    'order'      => 4,
];

$games[] = [
    'configId'   => 3,
    'configName' => 'Quake Champions - 2V2 TDM (Best of 5)',
    'configFile' => 'QuakeChampions_2V2TDM_BO5',
    'order'      => 5,
];

$games[] = [
    'configId'   => 17,
    'configName' => 'Quake Champions - Timelimit Duel (QPL S2:S2 - Best of 3)',
    'configFile' => 'QuakeChampions_TimelimitDuel_QPL_S2S2_BO3',
    'order'      => 6,
];

$games[] = [
    'configId'   => 18,
    'configName' => 'Quake Champions - Timelimit Duel (QPL S2:S2 - Best of 5)',
    'configFile' => 'QuakeChampions_TimelimitDuel_QPL_S2S2_BO5',
    'order'      => 7,
];

$games[] = [
    'configId'   => 19,
    'configName' => 'Quake Champions - Timelimit Duel (Estoty Cup - Best of 1)',
    'configFile' => 'QuakeChampions_TimelimitDuel_Estoty_BO1',
    'order'      => 8,
];


usort($games, function($a, $b) {
    return $a['order'] <=> $b['order'];
});
