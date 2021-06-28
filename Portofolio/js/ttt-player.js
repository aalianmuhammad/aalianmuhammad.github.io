export default class Player {
    constructor(name, symbol) {
      this.name = name;
      this.symbol = symbol;
      this.points = 0;
      this.playerlevel = 1;
    }
  
    /**
     * Add a function to add a point to the player total points
     */
  
    addPoints(){
      this.points += 1;
      if (this.points % 10 ==0) {
        this.playerlevel += 1;
      }
    }
  }
  