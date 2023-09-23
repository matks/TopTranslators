
export type Statics = {
    date: string;
    translators: Translator[];
    languages: Language[];
}

export type Translator = {
    name: string;
    username: string;
    country: string;
    flag: string;
    count: number;
    twitter: string;
    github: string;
    link: string;
    avatar: string;
    website: string;
    number: number;
    textCount: string;
    showed: boolean;
    id: number
}

export type Language = {
    country: string;
    flag: string;
    percent: number;
    number: number;
}

export type TranslatorsStepInfo = {
    title: string;
    class: string;
    from: number;
}
