/* Creacion de Constantes y Variables */
const 
    modalTest = $( '#test-modal' ),
    btnOptions = $( '#test-btnOptions' ).find( 'div' ),
    btnQuestion = '#test-btnOptions button',
    modalContent = $( '#test-modalContent' ),
    infoQuestion = $( '#test-divQuestion' ),
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
                modalTest.modal( 'toggle' )
                KlmHumans.createButton()
            }, 1000 );
        },
        createButton:function(){
            var Button = ''

            for( var i = 0; i < CntQuestion; i++ ){
                Button += '<button type="button" class="test-btnQuestion" data-question="' + ( i + 1 ) + '">' + ( i + 1 ) + '</button>'
            }

            btnOptions.html( Button )
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
                Titulo = document.getElementById('titulo')

            ( Id == 1 ) ? Question.innerHTML = 'Bienvenido' : Question.innerHTML =  '';
            
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
                countReplys = Question.replys.length,
                IdxSolution = Solution.findIndex( ( Obj => Obj.IdQuestion === Question.id ) )

            desingReplys = '<div class="col-12 test-Reply">'
            for( var i = 0; i < countReplys; i++ ){
                desingReplys += '<a href="#" id="' + Question.replys[ i ].id + '" ' + ( IdxSolution >= 0 && ( Question.id === Solution[ IdxSolution ].IdQuestion && Question.replys[ i ].id === Solution[ IdxSolution ].IdReply ) ? 'class="active"' : '' ) + '>'
                    desingReplys += '<span>' + Question.replys[ i ].reply + '</span>'
                    desingReplys += '<img src="' + Question.replys[ i ].img + '" />'
                    desingReplys += '<span/>'
                desingReplys += '</a>'
            }
            desingReplys += '</div>'

            desingQuestion = '<div class="row">'
                desingQuestion += '<div class="col-12">'
                    desingQuestion += '<div class="test-titleQuestion">' + Question.question + '</div>'
                desingQuestion += '</div>'
                desingQuestion += desingReplys
            desingQuestion += '</div>'
            
            modalContent.attr( 'question', Question.id )
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