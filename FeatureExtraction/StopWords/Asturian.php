<?php

declare(strict_types=1);

namespace Phpml\FeatureExtraction\StopWords;

use Phpml\FeatureExtraction\StopWords;

final class Asturian extends StopWords
{
    /**
     * @var array
     */
    protected $stopWords = ['a', 'anguaño', 'adelantre', 'amás', 'afirmó', 'amestó', 'agora', 'ende', 'al', 'daqué', 'dalguna', 'dalgunes', 'dalgún', 'dalgunos', 'dalgún',
        'alredor', 'dambos', 'ampleamos', 'énte', 'anterior', 'antes', 'apenes', 'aprosimao', 'aquel', 'aquelles', 'aquellos', 'aqui', 'equí', 'enriba', 'aseguró', 'asina',
        'atras', 'anque', 'ayeri', 'añedió', 'entá', 'baxu', 'abondo', 'bien', 'bon', 'bona', 'bones', 'bonu', 'bonos', 'cada', 'casi', 'cerca', 'cierta', 'ciertes', 'ciertu',
        'ciertos', 'cinco', 'comentó', 'como', 'con', 'conocer', 'consiguimos', 'consiguir', 'considera', 'consideró', 'consigo', 'consigue', 'consiguen', 'consigues', 'contra',
        'coses', 'creo', 'cual', 'cualos', 'cualesquier', 'cuando', 'cuanto', 'cuatro', 'cuenta', 'cómo', 'da', 'dadu', 'dan', 'dar', 'de', 'debe', 'deben', 'debíu', 'dicir',
        'dexó', 'del', 'demás', 'dientro', 'dende', 'dempués', 'diz', 'dicen', 'dichu', 'dieron', 'distintu', 'distintos', 'dixeron', 'dixo', 'dio', 'onde', 'dos', 'mientres',
        'y', 'exemplu', 'l\'ella', 'elles', 'ello', 'ellos', 'embargu', 'empleais', 'empleguen', 'emplegar', 'emplegues', 'empléu', 'n\'enriba', 'atopa', 'entós', 'entre',
        'yera', 'yerais', 'eramos', 'yeren', 'yeres', 'yes', 'ye', 'esa', 'eses', 'ese', 'eso', 'esos', 'esta', 'taba', 'tabais', 'taben', 'tabes', 'tái', 'estada', 'estadas',
        'tao', 'estaos', 'estais', 'tamos', 'estan', 'tando', 'tar', 'vamos tar', 'va tar', 'van tar', 'vas tar', 'voi tar', 'vais tar', 'taría', 'taríais', 'taríamos', 'taríen',
        'taríes', 'estos', 'este', 'teamos', 'esto', 'estos', 'toi', 'tuvi', 'tuviera', 'tuvierais', 'tuvieren', 'tuvieres', 'tuvieron', 'tuviera', 'tuvierais', 'tuvieren',
        'tuvieres', 'tuvimos', 'tuvisti', 'tuvistis', 'tuviéramos', 'tuvo', 'ta', 'tábamos', 'táis', 'tán', 'tas', 'tea', 'teáis', 'tean', 'teas', 'ex', 'esiste', 'esisten',
        'esplicó', 'espresó', 'fin', 'foi', 'fuera', 'fuerais', 'fueren', 'fueres', 'fueron', 'fuera', 'fuerais', 'fueren', 'fueres', 'fui fuimos', 'fuisti', 'fuistis',
        'fuéramos', 'gran', 'grandes', 'gueno', 'hai', 'haber', 'habida', 'habíes', 'habíu', 'habíos', 'habiendo', 'habremos', 'habrá', 'habrán', 'habrás', 'habré',
        'habréis', 'habría', 'habríais', 'habríamos', 'habríen', 'habríes', 'habéis', 'había', 'habíais', 'habíamos', 'habíen', 'habíes', 'fai', 'faceis', 'faemos',
        'faen', 'faer', 'faelo', 'fexes', 'escontra', 'faciendo', 'faigo', 'han', 'has', 'hasta', 'hai', 'haya', 'hayamos', 'hayan hayas', 'hayáis', 'he fechu', 'hemos',
        'fixeron', 'fixo güei', 'hubi', 'hubiera', 'hubierais', 'hubieren', 'hubieres', 'hubieron', 'hubiera', 'hubierais', 'hubieren', 'hubieres', 'hubimos', 'hubisti',
        'hubistis', 'hubiéramos', 'hubiéramos', 'hubo', 'igual', 'inclusive', 'indicó', 'informó', 'intenta', 'intentais', 'intentamos', 'intenten', 'intentar', 'intentes',
        'intentu dir', 'xuntu\'l', 'llau', 'llargu', 'les', 'llegar', 'lleva', 'llevar', 'lo los', 'depués', 'llugar', 'manera', 'manifestó', 'mayor', 'me por', 'aciu', 'meyor',
        'mentó', 'menos', 'la', 'mio', 'mientres', 'mio', 'les', 'mios', 'mesma', 'mesmes', 'mesmu', 'mesmes', 'manera', 'momentu', 'enforma', 'munches', 'enforma', 'munchos',
        'bien', 'más', 'mi', 'mio', 'mios', 'mio', 'mios', 'nada', 'naide', 'nin', 'nenguna', 'nengunes', 'nengún', 'nengunos', 'nengún', 'non', 'nos', 'nós', 'nuesa', 'nueses',
        'nuesu', 'nuesos', 'nueva', 'nueves', 'nuevu', 'nuevos', 'nunca', 'o', 'ocho', 'vos', 'otra', 'otres', 'otru', 'otros', 'para', 'paez', 'parte', 'partir', 'pasada',
        'pasáu', 'pero', 'pesar', 'poca', 'poques', 'poco', 'pocos', 'podeis', 'podemos', 'poder', 'podria', 'podriais', 'podriamos', 'podrian', 'podrias', 'va poder',
        'van poder', 'podría', 'podríen', 'poner', 'por', 'por qué', 'porque', 'posible', 'primer', 'primer', 'primeru', 'primeros', 'principalmente', 'mesma', 'propies',
        'mesmu', 'propios', 'próximu', 'próximos', 'pudo', 'pueda', 'puede', 'pueden', 'puedo', 'pos', 'que', 'quedó', 'queremos', 'quien', 'quier', 'quién', 'qué',
        'realizáu', 'realizar', 'realizó', 'respectu', 'sabe', 'sabeis', 'sabemos', 'saben', 'saber', 'sabes', 'síase', 'síamos', 'sían', 'sías', 'segunda', 'segundu',
        'según', 'seis', 'ser', 'vamos ser', 'va ser', 'van ser', 'vas ser', 'voi ser', 'vais ser', 'sería', 'seríais', 'seríamos', 'seríen', 'seríes', 'síais', 'señaló',
        'si', 'sío', 'siempres', 'siendo', 'siete', 'sigue', 'siguiente', 'ensin', 'sinón', 'sobre', 'sois', 'sola', 'solamente', 'soles', 'solu', 'solos', 'somos', 'son',
        'soi\'l', 'so', 'les sos', 'so sos', 'so sos', 'sí', 'namá', 'tal', 'tamién', 'tampoco tan', 'tanto', 'te tendremos', 'va tener', 'van tener', 'vas tener', 'voi tener',
        'vais tener', 'tendría', 'tendríais', 'tendríamos', 'tendríen', 'tendríes', 'tenéi', 'teneis', 'tenemos', 'tener', 'tenga', 'tengamos', 'tengan', 'tengas', 'tengo',
        'tengáis', 'tenida', 'teníes', 'teníu', 'teníos', 'teniendo', 'tenéis', 'tenía', 'teníais', 'teníamos', 'teníen', 'teníes', 'tercer', 'ti', 'tiempu', 'tien', 'tienen',
        'tienes', 'toa toes', 'inda tou toos', 'total', 'trabaya', 'trabajais', 'trabayamos', 'trabayen', 'trabayar', 'trabayes', 'trabayu tres', 'trata', 'traviés', 'trés',
        'el to', 'los tos', 'tuvi', 'tuviera', 'tuvierais', 'tuvieren', 'tuvieres', 'tuvieron', 'tuviera', 'tuvierais', 'tuvieren', 'tuvieres', 'tuvimos', 'tuvisti', 'tuvistis',
        'tuviéramos', 'tuvo', 'to', 'tos', 'to', 'tos', 'tu', 'peracabo', 'un', 'xuna', 'xunas', 'unu', 'unos', 'usa', 'usais', 'usamos', 'usen', 'usar', 'uses', 'usu', 'usté',
        'va', 'vais', 'valor', 'vamos', 'van', 'delles', 'dellos', 'vaiga', 'vegaes', 'ver', 'verdá', 'verdadera', 'verdaderu', 'vegada', 'vós', 'voi', 'vuesa', 'vueses', 'vuesu',
        'vuesos', 'y', 'yá', 'yo', 'él', 'yéramos', 'ésta', 'éstes', 'ésti', 'éstos', 'última', 'postreres', 'últimu', 'postreros'];

    public function __construct()
    {
        parent::__construct($this->stopWords);
    }
}
