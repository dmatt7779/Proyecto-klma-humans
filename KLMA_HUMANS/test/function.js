'use strict';

/* Creacion de Constantes y Variables */
const 
    btnQuestion = '#test-btnOptions button',
    infoQuestion = $( '#divQuestion' ),
    divSave = $( '#test-divSave' ),
    infoReply = '.test-Reply > a',
    btnSave = '#test-btnSave',
    Url = 'class/'

var 
    Param = new FormData(),
    Questions = [],
    Solution = [],
    CntQuestion = 6

/* Agrupando funciones dentro de la variable KlmHumans */
var 
    KlmHumans = {
        onReady : function(){
            setTimeout( function(){
                KlmHumans.existsQuestion( 1 );
            }, 1000 );
        },
        SentencesPHP: function( Url, Param, Function ){
            $.ajax( {
                url : Url,
                data: Param,
                dataType: 'json',
                type: 'POST',
                async: false,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function(){
                    //
                },
                success: function( Result ){
                    Function( Result )
                },
                complete: function(){
                    //
                },
                error: function( Error ){
                    console.log( Error )
                }
            } )
        },
        existsQuestion: function( Id ){
            var    
                Count = Questions.length,
                Validate = false

            if( Count !== 0 ){
                for( var i = 0; i < Count; i++ ){
                    if( Questions[ i ][ 'id' ] === Id ){
                        Validate = true
                        break
                    }
                }
            }
            
            this.infoQuestion( Id, Validate )
        },
        infoQuestion: function( Id, Validate ){
            var
                Question

            if( Validate ){
                console.log( Questions )
            } else {
                Param.append( 'Question', Id )
                this.SentencesPHP( Url + 'search_question.php', Param, function( Result ){
                    Questions.push( Result )
                    Question = Result
                } )
            }

            this.createQuestion( Question );
        },
        createQuestion: function( Question ){
            var 
                desingQuestion = '',
                desingReplys = '',
                desingTitle = '',
                countReplys = Question.replys.length,
                IdxSolution = Solution.findIndex( ( Obj => Obj.IdQuestion === Question.id ) )

            var Class = ( Question.id === 3 || Question.id === 4 || Question.id === 5 || Question.id === 6 )
                ?
                    'introtest' + Question.id + ''
                :
                    'introtest'

            desingTitle = '<div class="row">';
                desingTitle += '<div class="col-md-3"></div>';
                    desingTitle += '<div class="' + Class + ' col-md-6 animate-introtest">';
                        desingTitle += Question.title;
                    desingTitle += '</div>';
                desingTitle += '<div class="col-md-3"></div>';
            desingTitle += '</div>';

            desingReplys = '<div class="answ" id="selectanswer' + Question.id + '">';
            for( var i = 0; i < countReplys; i++ ){
                desingReplys += '<div class="testselect' + Question.id + '">';
                    desingReplys += '<div class="testicons testselect' + Question.id + Question.id +' animate-selector' + Question.id + '">';
                        ( Question.replys[ i ].reply.slice( -4 ) === '.png' ) 
                        ?
                            desingReplys += '<img style="width: 100px" src="' + Question.replys[ i ].reply + '" />'
                        :
                            desingReplys += '<div class="testwords testselect33 animate-selector3">' + Question.replys[ i ].reply + '</div>';
                    desingReplys += '</div>';
                desingReplys += '</div>';
            }
            desingReplys += '</div>';
           
            desingQuestion += desingTitle;
            desingQuestion += desingReplys;
            desingQuestion += '<div class="col-12">';
                desingQuestion += '<div class="question1 animate-q1">' + Question.question + '</div>';
            desingQuestion += '</div>';
            desingQuestion += '<div class="row" id="' + Question.id + '">';
                desingQuestion += '<div class="col-sm-4 col-md-5 col-lg-5"></div>';
                desingQuestion += '<div class="introtest animate-arrowbtn col-sm-4 col-md-2 col-lg-2">';
                    desingQuestion += '<button class="smooth"><img src="../assets/img/test/Paso.png" alt=""></button>';
                desingQuestion += '</div>';
                desingQuestion += '<div class="col-sm-4 col-md-5 col-lg-5"></div>';
            desingQuestion += '</div>';
            
            
            infoQuestion.html( desingQuestion )
        },
        selectReply: function( Element ){
            var 
                Parent = Element.parent(),
                IdQuestion = parseInt( modalContent.attr( 'question' ) )
                Index = ( IdQuestion - 1 ),
                IdReply = parseInt( Element.attr( 'id' ) ),
                countQuestions = Questions.length,
                IdxSolution = Solution.findIndex( ( Obj => Obj.IdQuestion === IdQuestion ) ),

            $( Parent ).find( 'a.active' ) && $( Parent ).find( 'a' ).removeClass( 'active' )
            Element.hasClass( 'active' ) ? Element.removeClass( 'active' ) : Element.addClass( 'active' )
            btnOptions.find( 'button' ).eq( Index ).addClass( 'active' )

            for( var i = 0; i < countQuestions; i++ ){
                if( Questions[ i ].id === IdQuestion ){
                    var Theme = $.map( Questions[ i ].replys, function( Item ){                        
                        if( Item.id === IdReply ) return Item.theme
                    } )[ 0 ];

                    if( IdxSolution >= 0 ){
                        Solution[ IdxSolution ].IdReply = IdReply
                        Solution[ IdxSolution ].Theme = Theme
                    } else {
                        Solution.push( { 'IdQuestion' : IdQuestion, 'IdReply' : IdReply, 'Value' : Questions[ i ].value, 'Theme' : Theme } )
                    }
                    break;
                }
            }

            if( CntQuestion === Solution.length ){ divSave.html( '<button type="button" id="test-btnSave">Registrar Test</button>' ) };
        },
        saveQuestion: function(){
            Param.append( 'Data', JSON.stringify( Solution ) )
            KlmHumans.SentencesPHP( Url + 'save_info.php', Param, function( Result ){
                console.log( Result )
            } )
        }
    }

/* Controlando las funciones de los elementos */

$( document ).ready( KlmHumans.onReady )
/*
$( document ).on( 'click', btnQuestion, function(){
    var 
        IdQuestion = $( this ).attr( 'data-question' )

    if( modalContent.attr( 'question' ) !== IdQuestion ){
        KlmHumans.existsQuestion( IdQuestion )
    }
} )

$( document ).on( 'click', infoReply, function(){
    var 
        Element = $( this )
        KlmHumans.selectReply( Element )
})

$( document ).on( 'click', btnSave, function(){
    KlmHumans.saveQuestion()
} )

modalTest.on( 'hidden.bs.modal', function ( e ) {
    Questions.length = 0
    Solution.length = 0
})
*/