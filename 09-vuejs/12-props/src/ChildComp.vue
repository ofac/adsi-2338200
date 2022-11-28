<script>
import { launchConfetti } from './utilities/confetti'
import { openModal, container } from "jenesius-vue-modal";
import Modal from "./Modal.vue"

export default {
  
  data() {
    return {
      sprite: '',
      sprites: [
        '../public/images/sprite07.svg',
        '../public/images/sprite01.svg',
        '../public/images/sprite02.svg',
        '../public/images/sprite03.svg',
        '../public/images/sprite04.svg',
        '../public/images/sprite05.svg',
        '../public/images/sprite06.svg',
      ],
      countErrors: 0,
      countMatches: 0,
      letters: [
        'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p',
        'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l',
        'z', 'x', 'c', 'v', 'b', 'n', 'm'
      ],
      ltr: [],
      word: '',
      lword: [],
      words: [
        'red', 'green', 'blue', 'black', 'white', 'yellow', 'aqua', 'fuchsia'
      ],
      wordLength: 0
    }
  },
  mounted() {
    this.sprite = this.sprites[this.countErrors]
    this.randomWord()
    this.printWord()
  },
  components: { 
    WidgetContainerModal: container
  },
  props: {
    msg: String
  },
  methods: {
    printWord()  {
      this.ltr = this.word.split('')
      for (let i = 0; i < this.wordLength; i++) {
        this.lword.push('')
      }
    },
    incrementErrors() {
      this.countErrors++
      if (this.countErrors < 6) {
        this.sprite = this.sprites[this.countErrors]
      } else {
        this.sprite = this.sprites[6]
        openModal(Modal, {title: "Sorry: You Lost! 💀"})
        this.inactiveLetters()
      }
    },
    incrementMatch() {
      this.countMatches++
      if (this.countMatches == this.wordLength) {
        launchConfetti()
        this.inactiveLetters()
        this.sprite = this.sprites[0]
        this.$refs.sprite.classList.remove('active')
        openModal(Modal, {title: "Congratulations: You Win! 🎉"})
      }
    },
    randomWord() {
      let rnd         = Math.floor(Math.random() * this.words.length)
      this.word       = this.words[rnd]
      this.wordLength = this.word.length
      //alert('Word: ' + this.word + " - Length: " + this.wordLength)
    },
    newGame() {
      location.reload()
    },
    checkLetter(letter, index) {
      if (this.word.includes(letter)) {
        // ---
        // let pos = this.word.indexOf(letter)
        // this.lword[pos] = letter
        for (let i = 0; i < this.ltr.length; i++) {
          if (this.ltr[i] == letter) {
            this.lword[i] = letter
            this.incrementMatch()
          }
        }
        // ---
        this.$refs.btns[index].classList.add('actived')
      } else {
        this.$refs.btns[index].classList.add('error')
        this.$refs.sprite.classList.add('active')
        this.incrementErrors()
      }
      this.$refs.btns[index].setAttribute('disabled', true)
    },
    inactiveLetters() {
      for (let i = 0; i < this.letters.length; i++) {
        this.$refs.btns[i].setAttribute('disabled', true)
      }
    }
  }
}
</script>

<template>
  <h2 class="mx-auto text-center font-medium text-2xl uppercase border-b-4 border-[#42b883] w-36">
      {{ msg || 'No props passed yet' }}
  </h2>
  <!--  -->
  <figure class="flex justify-center items-center mt-2">
    <img :src="sprite" ref="sprite" class="sprite">
  </figure>
  <!--  -->
  <section class="mx-8 mt-2 flex justify-center flex-wrap items-center">
    <div v-for="lw in lword" class="flex justify-center items-center bg-[#34495e] text-white w-8 h-8 m-1 p-2 uppercase rounded-md shadow-lg"> {{ lw }} </div>
  </section>
  <!--  -->
  <section class="mx-8 mt-2 flex justify-center flex-wrap items-center">
    <button v-for="(letter, index) in letters" ref="btns" @click="checkLetter(letter, index)" class="flex justify-center items-center w-6 h-6 m-1 p-2 bg-white/80 uppercase rounded-md shadow-lg hover:scale-125 transition duration-200"> {{ letter }} </button>
  </section>
  <!--  -->
  <button @click="newGame()" class="bg-[#34495e] text-white mx-auto py-2 px-10 flex rounded-full capitalize hover:scale-110 transition duration-200 mt-2">New Game</button>

  <widget-container-modal/>

</template>


<style scoped>
  figure{
    background: url(../public/images/sprite00.svg) no-repeat center;
  } 
 .actived {
   color: #fff;
   background-color: #42b883;
 }
 .error {
   color: #fff;
   background-color: #b84a42;
 }
 button:disabled {
   cursor: not-allowed;
 }
 img.sprite {
    transform-origin: 50% 0%;
    animation: jump 0.5s alternate infinite ease-in-out;
 }
 img.sprite.active {
    transform-origin: 50% 0%;
    animation: pendulum 1s alternate infinite ease-in-out;
 }
 @keyframes jump {
  0% {
    transform: translateY(2px);
  }
  100% {
    transform: translateY(-12px);
  }
}
@keyframes pendulum {
  0% {
    transform: rotate(10deg);
  }
  100% {
    transform: rotate(-10deg);
  }
}
</style>