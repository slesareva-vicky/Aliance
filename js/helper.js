// маски числового ввода
/* параметры:
 * mask - маска ввода, где символ d - позиция ввода чисел
 * placeholder - символ, который отображается на незаполненной позиции, по умол. "_"
 * прочие символы в шаблоне игнорируются
 * пример маска: '+7 (ddd) ddd-dd-dd' на экране для ввода: +7 (___) ___-__-__
 */
class Picture {
  constructor(mask, placeholder = '_') {
    this._mask = mask.replace(/[d]/g, placeholder);
    this._placeholder = placeholder;
    this._mapBuffer = [];
    mask.split('').forEach((el, i) => el === 'd' ? this._mapBuffer.push(i) : null);
    this._buffer = ''.padEnd(this._mapBuffer.length, placeholder);
    this._value = this._mask.split('');
  }

  get mask() { return this._mask; }

  start(value) {
    this._buffer = value.replace(/[^\d]/g, '')
      .slice(0, this._mapBuffer.length)
      .padEnd(this._mapBuffer.length, this._placeholder);
    this._value = this._mask.split('');
    this._buffer.split('').forEach((v, i) => this._value[this._mapBuffer[i]] = v);
    return this._mask;
  }

  edit(input, type) {
    // позиция курсора после введенного символа
    let caret = input.selectionStart;

    if (!type) input.value = this.start(input.value);

    // обычный посимвольный ввод
    if (type === "insertText") {
      const inputChar = input.value.slice(caret - 1, caret).replace(/[^\d]/, '');
      const bufferPosition = inputChar ? this._mapBuffer.findIndex(pos => pos >= caret - 1) : -1;

      if (~bufferPosition) {
        const buffer = this._buffer;
        // для незаполненного поля просто вставляем
        if (buffer.slice(bufferPosition, bufferPosition + 1) === this._placeholder) {
          const inC = buffer.split('');
          inC[bufferPosition] = inputChar;
          this._buffer = inC.join('');
          // вставляем введенный символ согласно позиции шаблона, последующие символы сдвигаем
        } else this._buffer = (bufferPosition ? buffer.slice(0, bufferPosition) : '') +
          inputChar + buffer.slice(bufferPosition, buffer.length - 1);

        // переформировываем маску
        this._mapBuffer.forEach((pos, index) => this._value.splice(pos, 1, this._buffer.slice(index, index + 1)));

        if (bufferPosition + 1 < this._mapBuffer.length) {
          caret = this._mapBuffer[bufferPosition + 1];
        }
      } else caret--;

      // посимвольное удаление справа от курсора (DEL)
    } else if (type === "deleteContentForward") {

      const bufferPosition = this._mapBuffer.findIndex(pos => pos >= caret);

      if (~bufferPosition) {
        const buffer = this._buffer;

        // удаляем символ справа от курсора, последующие символы сдвигаем влево и дополняем маской
        this._buffer = ((bufferPosition ? buffer.slice(0, bufferPosition) : '') +
          buffer.slice(bufferPosition + 1, buffer.length)).padEnd(this._mapBuffer.length, this._placeholder);

        // переформировываем маску
        this._mapBuffer.forEach((pos, index) => this._value.splice(pos, 1, this._buffer.slice(index, index + 1)));

        if (bufferPosition < this._mapBuffer.length) {
          caret = this._mapBuffer[bufferPosition];
        }
      }

      // посимвольное удаление слева от курсора (BACKSPACE)
    } else if (type === "deleteContentBackward") {

      const bufferPosition = this._mapBuffer.filter(pos => pos <= caret).length - 1;

      if (~bufferPosition) {
        const buffer = this._buffer;

        // удаляем символ слева от курсора, последующие символы сдвигаем влево и дополняем маской
        this._buffer = ((bufferPosition ? buffer.slice(0, bufferPosition) : '') +
          buffer.slice(bufferPosition + 1, buffer.length)).padEnd(this._mapBuffer.length, this._placeholder);

        // переформировываем маску
        this._mapBuffer.forEach((pos, index) => this._value.splice(pos, 1, this._buffer.slice(index, index + 1)));

        if (bufferPosition < this._mapBuffer.length) {
          caret = this._mapBuffer[bufferPosition];
        }
      } else caret++;

    }

    input.value = this._value.join('');
    input.setSelectionRange(caret, caret);
  }

} // END class Picture

